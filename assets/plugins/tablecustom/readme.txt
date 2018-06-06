This is a customized version of the table plugin, by Allan Jensen, WinterNet Studio, www.winternet.no

Basically just some menu items and form fields that have been deactivated.

For the Style form field I could not just comment it out, then other fields setting CSS style did not work.
Instead I changed the type to "spacer" and make the label a blank string.

For form field items you can add custom classes by adding this property:
	classes: "my-own-classes"  //but the class is only set on the <input> tag itself
