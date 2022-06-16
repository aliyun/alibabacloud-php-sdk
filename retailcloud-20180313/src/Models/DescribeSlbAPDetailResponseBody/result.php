<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeSlbAPDetailResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $cookieTimeout;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var int
     */
    public $establishedTimeout;

    /**
     * @var int
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkMode;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $realServerPort;

    /**
     * @var int
     */
    public $slbAPId;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbIp;

    /**
     * @var string
     */
    public $sslCertId;

    /**
     * @var int
     */
    public $stickySession;
    protected $_name = [
        'appId'              => 'AppId',
        'cookieTimeout'      => 'CookieTimeout',
        'envId'              => 'EnvId',
        'establishedTimeout' => 'EstablishedTimeout',
        'listenerPort'       => 'ListenerPort',
        'name'               => 'Name',
        'networkMode'        => 'NetworkMode',
        'protocol'           => 'Protocol',
        'realServerPort'     => 'RealServerPort',
        'slbAPId'            => 'SlbAPId',
        'slbId'              => 'SlbId',
        'slbIp'              => 'SlbIp',
        'sslCertId'          => 'SslCertId',
        'stickySession'      => 'StickySession',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cookieTimeout) {
            $res['CookieTimeout'] = $this->cookieTimeout;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->establishedTimeout) {
            $res['EstablishedTimeout'] = $this->establishedTimeout;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkMode) {
            $res['NetworkMode'] = $this->networkMode;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->realServerPort) {
            $res['RealServerPort'] = $this->realServerPort;
        }
        if (null !== $this->slbAPId) {
            $res['SlbAPId'] = $this->slbAPId;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }
        if (null !== $this->sslCertId) {
            $res['SslCertId'] = $this->sslCertId;
        }
        if (null !== $this->stickySession) {
            $res['StickySession'] = $this->stickySession;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CookieTimeout'])) {
            $model->cookieTimeout = $map['CookieTimeout'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EstablishedTimeout'])) {
            $model->establishedTimeout = $map['EstablishedTimeout'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NetworkMode'])) {
            $model->networkMode = $map['NetworkMode'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RealServerPort'])) {
            $model->realServerPort = $map['RealServerPort'];
        }
        if (isset($map['SlbAPId'])) {
            $model->slbAPId = $map['SlbAPId'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }
        if (isset($map['SslCertId'])) {
            $model->sslCertId = $map['SslCertId'];
        }
        if (isset($map['StickySession'])) {
            $model->stickySession = $map['StickySession'];
        }

        return $model;
    }
}
