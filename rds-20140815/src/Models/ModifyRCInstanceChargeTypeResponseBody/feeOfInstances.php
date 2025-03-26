<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyRCInstanceChargeTypeResponseBody;

use AlibabaCloud\Dara\Model;

class feeOfInstances extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $fee;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'currency' => 'Currency',
        'fee' => 'Fee',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
