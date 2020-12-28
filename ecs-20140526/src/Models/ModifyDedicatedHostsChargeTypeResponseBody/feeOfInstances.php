<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyDedicatedHostsChargeTypeResponseBody;

use AlibabaCloud\Tea\Model;

class feeOfInstances extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $fee;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'currency'   => 'Currency',
        'fee'        => 'Fee',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->fee) {
            $res['Fee'] = $this->fee;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return feeOfInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Fee'])) {
            $model->fee = $map['Fee'];
        }

        return $model;
    }
}
