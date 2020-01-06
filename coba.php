<body>
    <form id="form1" runat="server">
    <h2>Get Book Information cuy</h2>
    Author: <input type="text" id="authorTextbox" value="Patrick Rothfuss" /> <br />
    Title: <input type="text" id="titleTextbox" value="The Name of the Wind" /> <br />
    <input type="button" value="Get Book Information" id="getButton" onclick='getBookInformation()' />
    <br /><br />
    <div id="DataContainer" ></div>
    </form>
</body>
