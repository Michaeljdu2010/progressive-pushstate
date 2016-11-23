var example4 = new function () {
	var me = this,
		tableEl = document.getElementById('wcag-requirements'),
		rowEls = tableEl.querySelectorAll('#wcag-requirements tbody tr');
	
	me.init = function () {
		var el, i, cells, sectionCell, levelCell;
		
		
		pp.init(me.popstateEvent, {
			doPopstateOnload: true
		});
		
		tableEl.addEventListener('animationstart', animationendEvent);
		tableEl.addEventListener('animationend', animationendEvent);
	};
	
	function animationstartEvent(e) {
		tableEl.classList.remove('animation-done');
	}
	
	function animationendEvent(e) {
		console.log('x', e);
		tableEl.classList.add('animation-done');
	}
	
	me.popstateEvent = function (e) {
		var currentState = e.state,
			level = currentState.level,
			section = currentState.section,
			classes,
			levelRows,
			sectionRows,
			rowEl, i,
			rowClassList;
		
		
		for (i=0; i<rowEls.length; i++) {
			rowEl = rowEls[i];
			rowClassList = rowEl.classList;
			if ((!level || pp.isInStateProperty(level, rowEl.dataset.level)) && (!section || rowClassList.contains(section))) {
				rowClassList.remove('hide');
				rowClassList.add('show');
			} else {
				rowClassList.remove('show');
				rowClassList.add('hide');
			}
		}
	};
};

example4.init();
