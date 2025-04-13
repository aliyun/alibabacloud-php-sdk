<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Etindustryopenapi\V20200824\Models\GetMqttConnectResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $qosLevel;

    /**
     * @var string
     */
    public $serverUri;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'clientId' => 'ClientId',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'qosLevel' => 'QosLevel',
        'serverUri' => 'ServerUri',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->qosLevel) {
            $res['QosLevel'] = $this->qosLevel;
        }

        if (null !== $this->serverUri) {
            $res['ServerUri'] = $this->serverUri;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['QosLevel'])) {
            $model->qosLevel = $map['QosLevel'];
        }

        if (isset($map['ServerUri'])) {
            $model->serverUri = $map['ServerUri'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
