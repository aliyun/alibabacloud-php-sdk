<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class CreateApiKeyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var float
     */
    public $limitRate;

    /**
     * @var string
     */
    public $limitType;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $tokenQuota;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'keyName' => 'KeyName',
        'limitRate' => 'LimitRate',
        'limitType' => 'LimitType',
        'quantity' => 'Quantity',
        'tokenQuota' => 'TokenQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->limitRate) {
            $res['LimitRate'] = $this->limitRate;
        }

        if (null !== $this->limitType) {
            $res['LimitType'] = $this->limitType;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->tokenQuota) {
            $res['TokenQuota'] = $this->tokenQuota;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['LimitRate'])) {
            $model->limitRate = $map['LimitRate'];
        }

        if (isset($map['LimitType'])) {
            $model->limitType = $map['LimitType'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['TokenQuota'])) {
            $model->tokenQuota = $map['TokenQuota'];
        }

        return $model;
    }
}
