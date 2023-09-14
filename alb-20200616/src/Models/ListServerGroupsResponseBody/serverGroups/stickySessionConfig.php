<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups;

use AlibabaCloud\Tea\Model;

class stickySessionConfig extends Model
{
    /**
     * @description The cookie that is configured on the server.
     *
     * @example B490B5EBF6F3CD402E515D22BCDA****
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The timeout period of a cookie. Unit: seconds. Valid values: **1** to **86400**.
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
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $stickySessionEnabled;

    /**
     * @description The method that is used to handle a cookie. Valid values:
     *
     *   **Insert**: inserts a cookie.
     *
     * ALB inserts a cookie (SERVERID) into the first HTTP or HTTPS response packet that is sent to a client. The next request from the client contains this cookie and the listener forwards this request to the recorded backend server.
     *
     *   **Server**: rewrites a cookie.
     *
     * When ALB detects a user-defined cookie, it overwrites the original cookie with the user-defined cookie. Subsequent requests to ALB carry this user-defined cookie, and ALB determines the destination servers of the requests based on the cookies.
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
