<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddVpcHoneyPotRequest extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vpcSwitchId;
    protected $_name = [
        'vpcId'       => 'VpcId',
        'vpcSwitchId' => 'VpcSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcSwitchId) {
            $res['VpcSwitchId'] = $this->vpcSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddVpcHoneyPotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcSwitchId'])) {
            $model->vpcSwitchId = $map['VpcSwitchId'];
        }

        return $model;
    }
}
