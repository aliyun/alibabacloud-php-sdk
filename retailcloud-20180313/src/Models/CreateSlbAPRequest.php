<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class CreateSlbAPRequest extends Model
{
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
    public $protocol;

    /**
     * @var int
     */
    public $realServerPort;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $sslCertId;

    /**
     * @var int
     */
    public $stickySession;
    protected $_name = [
        'cookieTimeout'      => 'CookieTimeout',
        'envId'              => 'EnvId',
        'establishedTimeout' => 'EstablishedTimeout',
        'listenerPort'       => 'ListenerPort',
        'name'               => 'Name',
        'protocol'           => 'Protocol',
        'realServerPort'     => 'RealServerPort',
        'slbId'              => 'SlbId',
        'sslCertId'          => 'SslCertId',
        'stickySession'      => 'StickySession',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->realServerPort) {
            $res['RealServerPort'] = $this->realServerPort;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
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
     * @return CreateSlbAPRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RealServerPort'])) {
            $model->realServerPort = $map['RealServerPort'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
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
