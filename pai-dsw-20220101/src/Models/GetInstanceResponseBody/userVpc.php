<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\BandwidthLimit;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ForwardInfoResponse;

class userVpc extends Model
{
    /**
     * @var BandwidthLimit
     */
    public $bandwidthLimit;

    /**
     * @var string
     */
    public $defaultRoute;

    /**
     * @var string[]
     */
    public $extendedCIDRs;

    /**
     * @var ForwardInfoResponse[]
     */
    public $forwardInfos;

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
        'bandwidthLimit' => 'BandwidthLimit',
        'defaultRoute' => 'DefaultRoute',
        'extendedCIDRs' => 'ExtendedCIDRs',
        'forwardInfos' => 'ForwardInfos',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->bandwidthLimit) {
            $this->bandwidthLimit->validate();
        }
        if (\is_array($this->extendedCIDRs)) {
            Model::validateArray($this->extendedCIDRs);
        }
        if (\is_array($this->forwardInfos)) {
            Model::validateArray($this->forwardInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = null !== $this->bandwidthLimit ? $this->bandwidthLimit->toArray($noStream) : $this->bandwidthLimit;
        }

        if (null !== $this->defaultRoute) {
            $res['DefaultRoute'] = $this->defaultRoute;
        }

        if (null !== $this->extendedCIDRs) {
            if (\is_array($this->extendedCIDRs)) {
                $res['ExtendedCIDRs'] = [];
                $n1 = 0;
                foreach ($this->extendedCIDRs as $item1) {
                    $res['ExtendedCIDRs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->forwardInfos) {
            if (\is_array($this->forwardInfos)) {
                $res['ForwardInfos'] = [];
                $n1 = 0;
                foreach ($this->forwardInfos as $item1) {
                    $res['ForwardInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = BandwidthLimit::fromMap($map['BandwidthLimit']);
        }

        if (isset($map['DefaultRoute'])) {
            $model->defaultRoute = $map['DefaultRoute'];
        }

        if (isset($map['ExtendedCIDRs'])) {
            if (!empty($map['ExtendedCIDRs'])) {
                $model->extendedCIDRs = [];
                $n1 = 0;
                foreach ($map['ExtendedCIDRs'] as $item1) {
                    $model->extendedCIDRs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ForwardInfos'])) {
            if (!empty($map['ForwardInfos'])) {
                $model->forwardInfos = [];
                $n1 = 0;
                foreach ($map['ForwardInfos'] as $item1) {
                    $model->forwardInfos[$n1++] = ForwardInfoResponse::fromMap($item1);
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
