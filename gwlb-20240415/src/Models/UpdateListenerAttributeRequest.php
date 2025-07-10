<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;

class UpdateListenerAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $listenerDescription;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $serverGroupId;

    /**
     * @var int
     */
    public $tcpIdleTimeout;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'listenerDescription' => 'ListenerDescription',
        'listenerId' => 'ListenerId',
        'serverGroupId' => 'ServerGroupId',
        'tcpIdleTimeout' => 'TcpIdleTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->listenerDescription) {
            $res['ListenerDescription'] = $this->listenerDescription;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }

        if (null !== $this->tcpIdleTimeout) {
            $res['TcpIdleTimeout'] = $this->tcpIdleTimeout;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ListenerDescription'])) {
            $model->listenerDescription = $map['ListenerDescription'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }

        if (isset($map['TcpIdleTimeout'])) {
            $model->tcpIdleTimeout = $map['TcpIdleTimeout'];
        }

        return $model;
    }
}
