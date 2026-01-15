<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetSecretResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\KMSConfig;

class data extends Model
{
    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var KMSConfig
     */
    public $kmsConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $referenceCount;

    /**
     * @var string
     */
    public $secretId;

    /**
     * @var string
     */
    public $secretSource;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'createTimestamp' => 'createTimestamp',
        'gatewayType' => 'gatewayType',
        'kmsConfig' => 'kmsConfig',
        'name' => 'name',
        'referenceCount' => 'referenceCount',
        'secretId' => 'secretId',
        'secretSource' => 'secretSource',
        'status' => 'status',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        if (null !== $this->kmsConfig) {
            $this->kmsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }

        if (null !== $this->kmsConfig) {
            $res['kmsConfig'] = null !== $this->kmsConfig ? $this->kmsConfig->toArray($noStream) : $this->kmsConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->referenceCount) {
            $res['referenceCount'] = $this->referenceCount;
        }

        if (null !== $this->secretId) {
            $res['secretId'] = $this->secretId;
        }

        if (null !== $this->secretSource) {
            $res['secretSource'] = $this->secretSource;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }

        if (isset($map['kmsConfig'])) {
            $model->kmsConfig = KMSConfig::fromMap($map['kmsConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['referenceCount'])) {
            $model->referenceCount = $map['referenceCount'];
        }

        if (isset($map['secretId'])) {
            $model->secretId = $map['secretId'];
        }

        if (isset($map['secretSource'])) {
            $model->secretSource = $map['secretSource'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
