<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest;

use AlibabaCloud\Tea\Model;

class lakehouseId extends Model
{
    /**
     * @example sg-******
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @description vpc id。
     *
     * @example vpc-******
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-******
     *
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'securityGroup' => 'SecurityGroup',
        'vpcId'         => 'VpcId',
        'vswitch'       => 'Vswitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lakehouseId
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }

        return $model;
    }
}
