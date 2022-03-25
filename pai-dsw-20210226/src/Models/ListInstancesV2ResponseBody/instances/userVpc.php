<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstancesV2ResponseBody\instances;

use AlibabaCloud\Tea\Model;

class userVpc extends Model
{
    /**
     * @description Security Group Id
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description VSwitch Id
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Vpc Id
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userVpc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
