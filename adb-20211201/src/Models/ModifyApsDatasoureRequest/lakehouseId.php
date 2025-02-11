<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyApsDatasoureRequest;

use AlibabaCloud\Dara\Model;

class lakehouseId extends Model
{
    /**
     * @var string
     */
    public $securityGroup;
    /**
     * @var string
     */
    public $vpcId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
