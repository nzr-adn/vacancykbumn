import React from 'react';
import ReactDOM from 'react-dom';

import JqxListMenu from '../../../jqwidgets-react/react_jqxlistmenu.js';

class App extends React.Component {
    render () {
      let listMenuHTML = `
        <ul  id="list" data-role="listmenu">
            <li>
            <img src="../../../images/andrew.png" alt="" /><div>
                Andrew Fuller</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/andrew.png" alt="" />
                                </td>
                                <td>
                                    <b>Andrew Fuller</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Sales Representative
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    "Andrew received his BTS commercial in 1974 and a Ph.D. in international marketing
                                    from the University of Dallas in 1981. He is fluent in French and Italian and reads
                                    German. He joined the company as a sales representative, was promoted to sales manager
                                    in January 1992 and to vice president of sales in March 1993. Andrew is a member
                                    of the Sales Management Roundtable, the Seattle Chamber of Commerce, and the Pacific
                                    Rim Importers Association.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    19-Feb-52
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    14-Aug-92
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (206) 555-9482
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    908 W. Capital Way.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    98401
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    Tacoma
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    USA
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/anne.png" alt="" /><div>
                Anne Dodsworth</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/anne.png" alt="" />
                                </td>
                                <td>
                                    <b>Anne Dodsworth</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Inside Sales Coordinator
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Anne has a BA degree in English from St. Lawrence College. She is fluent in French
                                    and German.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    27-Jan-66
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    15-Nov-94
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (71) 555-5598
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    7 Houndstooth Rd.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    WG2 7LT
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    London
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    UK
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/janet.png" alt="" /><div>
                Janet Leverling</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/janet.png" alt="" />
                                </td>
                                <td>
                                    <b>Janet Leverling</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Sales Representative
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Janet has a BS degree in chemistry from Boston College (1984). She has also completed
                                    a certificate program in food retailing management. Janet was hired as a sales associate
                                    in 1991 and promoted to sales representative in February 1992.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    27-Jan-69
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    15-Nov-94
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (71) 555-4444
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    Miner Rd.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    WG2 7LT
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    London
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    UK
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/laura.png" alt="" /><div>
                Laura Callahan</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/laura.png" alt="" />
                                </td>
                                <td>
                                    <b>Laura Callahan</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Sales Representative
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Laura received a BA in psychology from the University of Washington. She has also
                                    completed a course in business French. She reads and writes French.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    27-Jan-66
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    15-Nov-94
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (71) 555-4444
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    7 Houndstooth Rd.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    WG2 7LT
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    London
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    UK
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/margaret.png" alt="" /><div>
                Margaret Peacock</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/margaret.png" alt="" />
                                </td>
                                <td>
                                    <b>Margaret Peacock</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Vice President, Sales
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Margaret holds a BA in English literature from Concordia College (1958) and an MA
                                    from the American Institute of Culinary Arts (1966). She was assigned to the London
                                    office temporarily from July through November 1992.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    19-Sep-37
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    17-Oct-93
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (206) 555-8122
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    4110 Old Redmond Rd.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    98052
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    Redmond
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    USA
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/michael.png" alt="" /><div>
                Michael Suyama</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/michael.png" alt="" />
                                </td>
                                <td>
                                    <b>Michael Suyama</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Sales Representative
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Michael is a graduate of Sussex University (MA, economics, 1983) and the University
                                    of California at Los Angeles (MBA, marketing, 1986). He has also taken the courses
                                    'Multi-Cultural Selling' and 'Time Management for the Sales Professional.' He is
                                    fluent in Japanese and can read and write French, Portuguese, and Spanish.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    02-Jul-63
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    05-June-96
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (71) 555-4848
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    Coventry House
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    EC2 7JR
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    London
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    UK
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/nancy.png" alt="" /><div>
                Nancy Divolio</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/nancy.png" alt="" />
                                </td>
                                <td>
                                    <b>Nancy Davolio</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Sales Representative
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Education includes a BA in psychology from Colorado State University in 1970. She
                                    also completed 'The Art of the Cold Call.' Nancy is a member of Toastmasters International.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    08-Dec-48
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    01-May-92
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (206) 555-9857
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    507 - 20th Ave. E. Apt. 2A
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    98122
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    Seattle
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    USA
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/robert.png" alt="" /><div>
                Robert King</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/robert.png" alt="" />
                                </td>
                                <td>
                                    <b>Robert King</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Sales Representative
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Robert King served in the Peace Corps and traveled extensively before completing
                                    his degree in English at the University of Michigan in 1992, the year he joined
                                    the company. After completing a course entitled 'Selling in Europe,' he was transferred
                                    to the London office in March 1993.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    29-May-60
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    02-Jan-94
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (71) 555-5598
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    Winchester Way
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    RG1 9SP
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    London
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    UK
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
            <li>
            <img src="../../../images/steven.png" alt="" /><div>
                Steven Buchanan</div>
            <ul data-role="listmenu">
                <li>
                    <div style="padding: 5px;" data-role="content">
                        <table>
                            <tr>
                                <td>
                                    <img width="50" height="50" src="../../../images/steven.png" alt="" />
                                </td>
                                <td>
                                    <b>Steven Buchanan</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Title
                                </td>
                                <td>
                                    Sales Manager
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Notes
                                </td>
                                <td>
                                    Steven Buchanan graduated from St. Andrews University, Scotland, with a BSC degree
                                    in 1976. Upon joining the company as a sales representative in 1992, he spent 6
                                    months in an orientation program at the Seattle office and then returned to his
                                    permanent post in London. He was promoted to sales manager in March 1993. Mr. Buchanan
                                    has completed the courses 'Successful Telemarketing' and 'International Sales Management.'
                                    He is fluent in French.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Birth Date
                                </td>
                                <td>
                                    04-Mar-55
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Hire Date
                                </td>
                                <td>
                                    02-May-94
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Home Phone
                                </td>
                                <td>
                                    (71) 555-5598
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Address
                                </td>
                                <td>
                                    908 W. Capital Way
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Postal Code
                                </td>
                                <td>
                                    98052
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    City
                                </td>
                                <td>
                                    Redmond
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Country
                                </td>
                                <td>
                                    USA
                                </td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
            </li>
        </ul>`;
        return (
            <div>
                <JqxListMenu template={listMenuHTML}
                  width={600} autoSeparators={true} enableScrolling={false}
                  showHeader={true} placeHolder={'Find contact...'}
                />
            </div>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'));
