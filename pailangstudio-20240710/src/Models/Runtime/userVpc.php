<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Runtime;

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
    public $extendedCIDRs;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'defaultRoute' => 'DefaultRoute',
        'extendedCIDRs' => 'ExtendedCIDRs',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId' => 'VSwitchId',
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
        if (null !== $this->defaultRoute) {
            $res['DefaultRoute'] = $this->defaultRoute;
        }

        if (null !== $this->extendedCIDRs) {
            if (\is_array($this->extendedCIDRs)) {
                $res['ExtendedCIDRs'] = [];
                $n1 = 0;
                foreach ($this->extendedCIDRs as $item1) {
                    $res['ExtendedCIDRs'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (isset($map['ExtendedCIDRs'])) {
            if (!empty($map['ExtendedCIDRs'])) {
                $model->extendedCIDRs = [];
                $n1 = 0;
                foreach ($map['ExtendedCIDRs'] as $item1) {
                    $model->extendedCIDRs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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
