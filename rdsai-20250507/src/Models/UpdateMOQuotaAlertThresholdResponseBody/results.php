<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateMOQuotaAlertThresholdResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $apikey;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var int
     */
    public $thresholdPercent;
    protected $_name = [
        'apikey' => 'Apikey',
        'instanceId' => 'InstanceId',
        'keyName' => 'KeyName',
        'keyType' => 'KeyType',
        'thresholdPercent' => 'ThresholdPercent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apikey) {
            $res['Apikey'] = $this->apikey;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }

        if (null !== $this->thresholdPercent) {
            $res['ThresholdPercent'] = $this->thresholdPercent;
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
        if (isset($map['Apikey'])) {
            $model->apikey = $map['Apikey'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        if (isset($map['ThresholdPercent'])) {
            $model->thresholdPercent = $map['ThresholdPercent'];
        }

        return $model;
    }
}
