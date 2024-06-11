<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class UpgradeAndroidInstanceGroupRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @example 10
     *
     * @var int
     */
    public $increaseNumberOfInstance;

    /**
     * @example ag-asguicdjh****
     *
     * @var string
     */
    public $instanceGroupId;
    protected $_name = [
        'autoPay'                  => 'AutoPay',
        'increaseNumberOfInstance' => 'IncreaseNumberOfInstance',
        'instanceGroupId'          => 'InstanceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->increaseNumberOfInstance) {
            $res['IncreaseNumberOfInstance'] = $this->increaseNumberOfInstance;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeAndroidInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['IncreaseNumberOfInstance'])) {
            $model->increaseNumberOfInstance = $map['IncreaseNumberOfInstance'];
        }
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        return $model;
    }
}
