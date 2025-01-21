<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceDLinkResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $auxVSwitchList;
    /**
     * @var string
     */
    public $destinationCIDRs;
    /**
     * @var string
     */
    public $requestId;
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
        'auxVSwitchList'   => 'AuxVSwitchList',
        'destinationCIDRs' => 'DestinationCIDRs',
        'requestId'        => 'RequestId',
        'securityGroupId'  => 'SecurityGroupId',
        'vSwitchId'        => 'VSwitchId',
        'vpcId'            => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->auxVSwitchList)) {
            Model::validateArray($this->auxVSwitchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auxVSwitchList) {
            if (\is_array($this->auxVSwitchList)) {
                $res['AuxVSwitchList'] = [];
                $n1                    = 0;
                foreach ($this->auxVSwitchList as $item1) {
                    $res['AuxVSwitchList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->destinationCIDRs) {
            $res['DestinationCIDRs'] = $this->destinationCIDRs;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AuxVSwitchList'])) {
            if (!empty($map['AuxVSwitchList'])) {
                $model->auxVSwitchList = [];
                $n1                    = 0;
                foreach ($map['AuxVSwitchList'] as $item1) {
                    $model->auxVSwitchList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DestinationCIDRs'])) {
            $model->destinationCIDRs = $map['DestinationCIDRs'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
