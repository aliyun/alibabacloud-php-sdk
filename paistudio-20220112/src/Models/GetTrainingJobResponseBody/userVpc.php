<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Dara\Model;

class userVpc extends Model
{
    /**
     * @var string[]
     */
    public $extendedCIDRs;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $switchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'extendedCIDRs' => 'ExtendedCIDRs',
        'securityGroupId' => 'SecurityGroupId',
        'switchId' => 'SwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->extendedCIDRs)) {
            Model::validateArray($this->extendedCIDRs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendedCIDRs) {
            if (\is_array($this->extendedCIDRs)) {
                $res['ExtendedCIDRs'] = [];
                $n1 = 0;
                foreach ($this->extendedCIDRs as $item1) {
                    $res['ExtendedCIDRs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ExtendedCIDRs'])) {
            if (!empty($map['ExtendedCIDRs'])) {
                $model->extendedCIDRs = [];
                $n1 = 0;
                foreach ($map['ExtendedCIDRs'] as $item1) {
                    $model->extendedCIDRs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
