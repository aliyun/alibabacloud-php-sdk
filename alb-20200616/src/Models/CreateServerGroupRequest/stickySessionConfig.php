<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest;

use AlibabaCloud\Tea\Model;

class stickySessionConfig extends Model
{
    /**
     * @description The cookie to be configured on the server.
     *
     * The cookie must be 1 to 200 characters in length and can contain only ASCII characters and digits. It cannot contain commas (,), semicolons (;), or space characters. It cannot start with a dollar sign ($).
     *
     * > This parameter takes effect when the **StickySessionEnabled** parameter is set to **true** and the **StickySessionType** parameter is set to **Server**.
     * @example B490B5EBF6F3CD402E515D22BCDA****
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The timeout period of a cookie. Unit: seconds.
     *
     * Valid values: **1** to **86400**.
     *
     * Default value: **1000**.
     *
     * > This parameter takes effect only when the **StickySessionEnabled** parameter is set to **true** and the **StickySessionType** parameter is set to **Insert**.
     * @example 1000
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description Specifies whether to enable session persistence. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * > This parameter takes effect when the **ServerGroupType** parameter is set to **Instance** or **Ip**.
     * @example false
     *
     * @var bool
     */
    public $stickySessionEnabled;

    /**
     * @description The method that is used to handle a cookie. Valid values:
     *
     *   **Insert** (default): inserts a cookie.
     *
     * ALB inserts a session cookie (SERVERID) into the first HTTP or HTTPS response that is sent to a client. Subsequent requests to ALB carry this cookie, and ALB determines the destination servers of the requests based on the cookies.
     *
     *   **Server**: rewrites a cookie.
     *
     * When ALB detects a user-defined cookie, it overwrites the original cookie with the user-defined cookie. Subsequent requests to ALB carry this user-defined cookie, and ALB determines the destination servers of the requests based on the cookies.
     *
     * > This parameter takes effect when the **StickySessionEnabled** parameter is set to **true**.
     * @example Insert
     *
     * @var string
     */
    public $stickySessionType;
    protected $_name = [
        'cookie'               => 'Cookie',
        'cookieTimeout'        => 'CookieTimeout',
        'stickySessionEnabled' => 'StickySessionEnabled',
        'stickySessionType'    => 'StickySessionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookie) {
            $res['Cookie'] = $this->cookie;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->stickySessionEnabled) {
            $res['StickySessionEnabled'] = $this->stickySessionEnabled;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stickySessionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cookie'])) {
            $model->cookie = $map['Cookie'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['StickySessionEnabled'])) {
            $model->stickySessionEnabled = $map['StickySessionEnabled'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }

        return $model;
    }
}
