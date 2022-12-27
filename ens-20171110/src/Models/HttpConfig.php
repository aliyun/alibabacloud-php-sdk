<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class HttpConfig extends Model
{
    /**
     * @var string
     */
    public $cookie;

    /**
     * @example 500
     *
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var int
     */
    public $idleTimeout;

    /**
     * @var int
     */
    public $requestTimeout;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $serverCertificateId;

    /**
     * @var string
     */
    public $stickySession;

    /**
     * @example insert
     *
     * @var string
     */
    public $stickySessionType;

    /**
     * @example on
     *
     * @var string
     */
    public $XForwardedFor;
    protected $_name = [
        'cookie'              => 'Cookie',
        'cookieTimeout'       => 'CookieTimeout',
        'idleTimeout'         => 'IdleTimeout',
        'requestTimeout'      => 'RequestTimeout',
        'scheduler'           => 'Scheduler',
        'serverCertificateId' => 'ServerCertificateId',
        'stickySession'       => 'StickySession',
        'stickySessionType'   => 'StickySessionType',
        'XForwardedFor'       => 'XForwardedFor',
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
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverCertificateId) {
            $res['ServerCertificateId'] = $this->serverCertificateId;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }
        if (null !== $this->stickySessionType) {
            $res['StickySessionType'] = $this->stickySessionType;
        }
        if (null !== $this->XForwardedFor) {
            $res['XForwardedFor'] = $this->XForwardedFor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HttpConfig
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
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerCertificateId'])) {
            $model->serverCertificateId = $map['ServerCertificateId'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }
        if (isset($map['StickySessionType'])) {
            $model->stickySessionType = $map['StickySessionType'];
        }
        if (isset($map['XForwardedFor'])) {
            $model->XForwardedFor = $map['XForwardedFor'];
        }

        return $model;
    }
}
