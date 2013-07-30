 $('#classTable').WATable(
	 {
       	url: '/jsondata/table1',
       	debug: true, 
	preFill: true,
	filter: true,
	//set options for tool tips and search inputs
	types:{
		string:{
			tooltip:"Search the Courses listed",
			placeHolder: "Search..."
		}
	}
      	});
