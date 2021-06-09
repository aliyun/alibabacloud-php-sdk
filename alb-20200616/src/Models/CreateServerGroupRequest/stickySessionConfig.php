<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateServerGroupRequest;

use AlibabaCloud\Tea\Model;

class stickySessionConfig extends Model
{
    /**
     * @description 服务器上配置的Cookie
     *
     * @var string
     */
    public $cookie;

    /**
     * @description 服务器上配置的Cookie
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @description 是否启用会话保持
     *
     * @var bool
     */
    public $stickySessionEnabled;

    /**
     * @description 会话保持类型
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
