<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest;

use AlibabaCloud\Tea\Model;

class stickySessionConfig extends Model
{
    /**
     * @description The cookie that you want to configure for the server.
     *
     * The cookie must be 1 to 200 characters in length, and can contain only ASCII letters and digits. It cannot contain commas (,), semicolons (;), or space characters. It cannot start with a dollar sign ($).
     *
     * >  This parameter takes effect only when **StickySessionEnabled** is set to **true** and **StickySessionType** is set to **server**.
     * @example B490B5EBF6F3CD402E515D22BCDA****
     *
     * @var string
     */
    public $cookie;

    /**
     * @description The maximum amount of time to wait before the session cookie expires. Unit: seconds.
     *
     * Valid values: **1** to **86400**.
     *
     * Default value: **1000**.
     *
     * >  This parameter takes effect only when **StickySessionEnabled** is set to **true** and **StickySessionType** is set to **Insert**.
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
     * >  This parameter takes effect when the **ServerGroupType** parameter is set to **Instance** or **Ip**.
     * @example false
     *
     * @var bool
     */
    public $stickySessionEnabled;

    /**
     * @description The method that is used to handle cookies. Valid values:
     *
     *   **Insert** (default value): inserts a cookie. The first time a client accesses SLB, SLB inserts the SERVERID cookie into the HTTP or HTTPS response packet. Subsequent requests from the client that carry this cookie are forwarded to the same backend server as the first request.
     *   **Server**: rewrites a cookie. SLB rewrites the custom cookies in requests from a client. Subsequent requests from the client that carry the new cookie are forwarded to the same backend server as the first request.
     *
     * >  This parameter takes effect when the **StickySessionEnabled** parameter is set to **true**.
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
