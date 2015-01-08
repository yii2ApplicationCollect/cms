<?php
/**
 * @link http://buildwithcraft.com/
 * @copyright Copyright (c) 2013 Pixel & Tonic, Inc.
 * @license http://buildwithcraft.com/license
 */

namespace craft\app\variables;

use craft\app\helpers\UrlHelper;
use craft\app\web\HttpCookie;

/**
 * Request functions.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 3.0
 */
class HttpRequest
{
	// Public Methods
	// =========================================================================

	/**
	 * Returns whether this is an Ajax request.
	 *
	 * @return bool
	 */
	public function isAjax()
	{
		return Craft::$app->request->isAjaxRequest();
	}

	/**
	 * Returns whether this is a secure connection.
	 *
	 * @return bool
	 */
	public function isSecure()
	{
		return Craft::$app->request->isSecureConnection();
	}

	/**
	 * Returns whether this is a Live Preview request.
	 *
	 * @return bool
	 */
	public function isLivePreview()
	{
		return Craft::$app->request->isLivePreview();
	}

	/**
	 * Returns the script name used to access Craft.
	 *
	 * @return string
	 */
	public function getScriptName()
	{
		return Craft::$app->request->getScriptName();
	}

	/**
	 * Returns the request's URI.
	 *
	 * @return mixed
	 */
	public function getPath()
	{
		return Craft::$app->request->getPath();
	}

	/**
	 * Returns the request's full URL.
	 *
	 * @return mixed
	 */
	public function getUrl()
	{
		$uri = Craft::$app->request->getPath();
		return UrlHelper::getUrl($uri);
	}

	/**
	 * Returns all URI segments.
	 *
	 * @return array
	 */
	public function getSegments()
	{
		return Craft::$app->request->getSegments();
	}

	/**
	 * Returns a specific URI segment, or null if the segment doesn't exist.
	 *
	 * @param int $num
	 *
	 * @return string|null
	 */
	public function getSegment($num)
	{
		return Craft::$app->request->getSegment($num);
	}

	/**
	 * Returns the first URI segment.
	 *
	 * @return string|null
	 */
	public function getFirstSegment()
	{
		return Craft::$app->request->getSegment(1);
	}

	/**
	 * Returns the last URL segment.
	 *
	 * @return string|null
	 */
	public function getLastSegment()
	{
		return Craft::$app->request->getSegment(-1);
	}

	/**
	 * Returns a variable from either the query string or the post data.
	 *
	 * @param string      $name
	 * @param string|null $default
	 *
	 * @return mixed
	 */
	public function getParam($name, $default = null)
	{
		return Craft::$app->request->getParam($name, $default);
	}

	/**
	 * Returns a variable from the query string.
	 *
	 * @param string|null $name
	 * @param string|null $default
	 *
	 * @return mixed
	 */
	public function getQuery($name = null, $default = null)
	{
		return Craft::$app->request->getQuery($name, $default);
	}

	/**
	 * Returns a value from post data.
	 *
	 * @param string|null $name
	 * @param string|null $default
	 *
	 * @return mixed
	 */
	public function getPost($name = null, $default = null)
	{
		return Craft::$app->request->getPost($name, $default);
	}

	/**
	 * Returns a [[HttpCookie]] if it exists, otherwise, null.
	 *
	 * @param $name
	 *
	 * @return HttpCookie|null
	 */
	public function getCookie($name)
	{
		return Craft::$app->request->getCookie($name);
	}

	/**
	 * Returns the server name.
	 *
	 * @return string
	 */
	public function getServerName()
	{
		return Craft::$app->request->getServerName();
	}

	/**
	 * Returns which URL format we're using (PATH_INFO or the query string)
	 *
	 * @return string
	 */
	public function getUrlFormat()
	{
		if (Craft::$app->config->usePathInfo())
		{
			return 'pathinfo';
		}
		else
		{
			return 'querystring';
		}
	}

	/**
	 * Returns whether the request is coming from a mobile browser.
	 *
	 * @param bool $detectTablets
	 *
	 * @return bool
	 */
	public function isMobileBrowser($detectTablets = false)
	{
		return Craft::$app->request->isMobileBrowser($detectTablets);
	}

	/**
	 * Returns the page number if this is a paginated request.
	 *
	 * @return int
	 */
	public function getPageNum()
	{
		return Craft::$app->request->getPageNum();
	}

	/**
	 * Returns the schema and host part of the application URL.  The returned URL does not have an ending slash. By
	 * default this is determined based on the user request information.
	 *
	 * @param string $schema
	 *
	 * @return string
	 */
	public function getHostInfo($schema = '')
	{
		return Craft::$app->request->getHostInfo($schema);
	}

	/**
	 * Returns the relative URL of the entry script.
	 *
	 * @return string
	 */
	public function getScriptUrl()
	{
		return Craft::$app->request->getScriptUrl();
	}

	/**
	 * Returns the path info of the currently requested URL. This refers to the part that is after the entry script and
	 * before the question mark. The starting and ending slashes are stripped off.
	 *
	 * @return string
	 */
	public function getPathInfo()
	{
		return Craft::$app->request->getPathInfo();
	}

	/**
	 * Returns the request URI portion for the currently requested URL. This refers to the portion that is after the
	 * host info part. It includes the query string part if any.
	 *
	 * @return string
	 */
	public function getRequestUri()
	{
		return Craft::$app->request->getRequestUri();
	}

	/**
	 * Returns the server port number.
	 *
	 * @return int
	 */
	public function getServerPort()
	{
		return Craft::$app->request->getServerPort();
	}

	/**
	 * Returns the URL referrer or null if not present.
	 *
	 * @return string
	 */
	public function getUrlReferrer()
	{
		return Craft::$app->request->getUrlReferrer();
	}

	/**
	 * Returns the user agent or null if not present.
	 *
	 * @return string
	 */
	public function getUserAgent()
	{
		return Craft::$app->request->getUserAgent();
	}

	/**
	 * Returns the user IP address.
	 *
	 * @return string
	 */
	public function getUserIP()
	{
		return Craft::$app->request->getUserIP();
	}

	/**
	 * Returns the user host name or null if it cannot be determined.
	 *
	 * @return string
	 */
	public function getUserHost()
	{
		return Craft::$app->request->getUserHost();
	}

	/**
	 * Returns the port to use for insecure requests. Defaults to 80, or the port specified by the server if the current
	 * request is insecure.
	 *
	 * @return int
	 */
	public function getPort()
	{
		return Craft::$app->request->getPort();
	}

	/**
	 * Returns the random token used to perform CSRF validation.
	 *
	 * The token will be read from cookie first. If not found, a new token will be generated.
	 *
	 * @return string The random token for CSRF validation.
	 */
	public function getCsrfToken()
	{
		return Craft::$app->request->getCsrfToken();
	}

	/**
	 * Returns part of the request URL that is after the question mark.
	 *
	 * @return string The part of the request URL that is after the question mark.
	 */
	public function getQueryString()
	{
		return Craft::$app->request->getQueryString();
	}

	/**
	 * Returns the request’s query string, without the p= parameter.
	 *
	 * @return string The query string.
	 */
	public function getQueryStringWithoutPath()
	{
		return Craft::$app->request->getQueryStringWithoutPath();
	}

	// Deprecated methods
	// -------------------------------------------------------------------------

	/**
	 * Returns the user IP address.
	 *
	 * @return string
	 * @deprecated Deprecated in Craft 3.0. Use [[getUserIP()]] instead.
	 */
	public function getUserHostAddress()
	{
		Craft::$app->deprecator->log('craft.request.getUserHostAddress()', 'craft.request.getUserHostAddress() is deprecated. Use getUserIP() instead.');
		return $this->getUserIP();
	}

	/**
	 * Retrieves the best guess of the client’s actual IP address taking into account numerous HTTP proxy headers due to
	 * variations in how different ISPs handle IP addresses in headers between hops.
	 *
	 * Considering any of these server vars besides REMOTE_ADDR can be spoofed, this method should not be used when you
	 * need a trusted source for the IP address. Use `$_SERVER['REMOTE_ADDR']` instead.
	 *
	 * @return string The IP address.
	 * @deprecated Deprecated in Craft 3.0. Use [[getUserIP()]] instead.
	 */
	public function getIpAddress()
	{
		Craft::$app->deprecator->log('craft.request.getIpAddress()', 'craft.request.getIpAddress() is deprecated. Use getUserIP() instead.');
		return $this->getUserIP();
	}
}
