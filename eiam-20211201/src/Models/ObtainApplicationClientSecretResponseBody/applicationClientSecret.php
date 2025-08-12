<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainApplicationClientSecretResponseBody;

use AlibabaCloud\Dara\Model;

class applicationClientSecret extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientSecret;

    /**
     * @var int
     */
    public $expirationTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastUsedTime;

    /**
     * @var string
     */
    public $secretId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'clientId' => 'ClientId',
        'clientSecret' => 'ClientSecret',
        'expirationTime' => 'ExpirationTime',
        'instanceId' => 'InstanceId',
        'lastUsedTime' => 'LastUsedTime',
        'secretId' => 'SecretId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
        }

        if (null !== $this->expirationTime) {
            $res['ExpirationTime'] = $this->expirationTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastUsedTime) {
            $res['LastUsedTime'] = $this->lastUsedTime;
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        if (isset($map['ExpirationTime'])) {
            $model->expirationTime = $map['ExpirationTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastUsedTime'])) {
            $model->lastUsedTime = $map['LastUsedTime'];
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
