## ParameterList

### A basic way to manually add parameters to Symphony CMS

Version: 1.1  
Requirements: Symphony CMS 2.3 and above

Thanks to [@firegoby (Chris Batchelor)](https://github.com/firegoby), who was kind enough to show me how to accomplish this and basically write this script for me. 

#### How to use...

Open the `extension.driver.php` file and look for the following code block.

```
public function __addParam($context) {

	/* ADD PARAMETERS BELOW HERE */

	// Adding a unix-timestamp parameter
	$context['params']['unix-timestamp'] = getdate()[0]; 



	/* END OF PARAMETERS */

}
```

In this case, the default entry that is with this basic extension, is a parameter to output a unix-timestamp... the following code accomplishes that...

```
// Adding a unix-timestamp parameter
$context['params']['unix-timestamp'] = getdate()[0];
```

**This extension is no replacement for the [Global Parameter Loader](https://github.com/symphonists/globalparamloader.git) (which is a far superior extension in an every way)**. But due to some environments, eval can cause strange 500 errors. Turning off eval will prevent you from using PHP expressions in your parameters.

![](http://f.cl.ly/items/0c2K0I2c140E0j2y3P0b/Screen%20Shot%202014-10-05%20at%204.27.09%20PM.png)

This basic extension, allowed me to accomplish what I was trying to do with PHP expressions in parameters.

