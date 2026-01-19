<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListClientPublicKeysResponseBody;

use AlibabaCloud\Dara\Model;

class clientPublicKeys extends Model
{
    /**
     * @var string
     */
    public $algorithmType;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $clientPublicKeyId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $lastUsedTime;

    /**
     * @var bool
     */
    public $primary;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'algorithmType' => 'AlgorithmType',
        'applicationId' => 'ApplicationId',
        'clientPublicKeyId' => 'ClientPublicKeyId',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'lastUsedTime' => 'LastUsedTime',
        'primary' => 'Primary',
        'publicKey' => 'PublicKey',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->algorithmType) {
            $res['AlgorithmType'] = $this->algorithmType;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->clientPublicKeyId) {
            $res['ClientPublicKeyId'] = $this->clientPublicKeyId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lastUsedTime) {
            $res['LastUsedTime'] = $this->lastUsedTime;
        }

        if (null !== $this->primary) {
            $res['Primary'] = $this->primary;
        }

        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
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
        if (isset($map['AlgorithmType'])) {
            $model->algorithmType = $map['AlgorithmType'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ClientPublicKeyId'])) {
            $model->clientPublicKeyId = $map['ClientPublicKeyId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LastUsedTime'])) {
            $model->lastUsedTime = $map['LastUsedTime'];
        }

        if (isset($map['Primary'])) {
            $model->primary = $map['Primary'];
        }

        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
