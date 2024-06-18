<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupsResponseBody\serverGroups;

use AlibabaCloud\Tea\Model;

class stickySessionConfig extends Model
{
    /**
     * @description The cookie configured for the server.
     *
     * @example B490B5EBF6F3CD402E515D22BCDA****
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The timeout period of the cookie. Unit: seconds. Valid values: **1** to **86400**.
     *
     * >  This parameter takes effect only when **StickySessionEnabled** is set to **true** and **StickySessionType** is set to **Insert**.
     * @example 1000
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description Indicates whether session persistence is enabled. Valid value:
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
     * @description The method that is used to handle the cookie. Valid value:
     *
     *   **insert**: inserts the cookie. The first time a client accesses ALB, ALB inserts the SERVERID cookie into the HTTP or HTTPS response packet. Subsequent requests from the client that carry this cookie are forwarded to the same backend server as the first request.
     *   **Server**: rewrites the cookie. ALB rewrites the custom cookies in requests from a client. Subsequent requests from the client that carry the new cookie are forwarded to the same backend server as the first request.
     *
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
