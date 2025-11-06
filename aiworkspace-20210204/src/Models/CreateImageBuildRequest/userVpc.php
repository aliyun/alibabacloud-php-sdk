<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateImageBuildRequest;

use AlibabaCloud\Dara\Model;

class userVpc extends Model
{
    /**
     * @var string
     */
    public $defaultRoute;

    /**
     * @var string[]
     */
    public $extendedCidrs;

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
        'defaultRoute' => 'DefaultRoute',
        'extendedCidrs' => 'ExtendedCidrs',
        'securityGroupId' => 'SecurityGroupId',
        'switchId' => 'SwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->extendedCidrs)) {
            Model::validateArray($this->extendedCidrs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultRoute) {
            $res['DefaultRoute'] = $this->defaultRoute;
        }

        if (null !== $this->extendedCidrs) {
            if (\is_array($this->extendedCidrs)) {
                $res['ExtendedCidrs'] = [];
                $n1 = 0;
                foreach ($this->extendedCidrs as $item1) {
                    $res['ExtendedCidrs'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['DefaultRoute'])) {
            $model->defaultRoute = $map['DefaultRoute'];
        }

        if (isset($map['ExtendedCidrs'])) {
            if (!empty($map['ExtendedCidrs'])) {
                $model->extendedCidrs = [];
                $n1 = 0;
                foreach ($map['ExtendedCidrs'] as $item1) {
                    $model->extendedCidrs[$n1] = $item1;
                    ++$n1;
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
