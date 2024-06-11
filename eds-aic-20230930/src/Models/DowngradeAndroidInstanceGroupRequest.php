<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DowngradeAndroidInstanceGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description This parameter is required.
     *
     * @example ag-cuv4scs4obxhs****
     *
     * @var string
     */
    public $instanceGroupId;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'autoPay'            => 'AutoPay',
        'instanceGroupId'    => 'InstanceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            $res['AndroidInstanceIds'] = $this->androidInstanceIds;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DowngradeAndroidInstanceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = $map['AndroidInstanceIds'];
            }
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        return $model;
    }
}
