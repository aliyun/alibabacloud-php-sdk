<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListServerIdeInstancesResponseBody\pagingInfo\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListServerIdeInstancesResponseBody\pagingInfo\instances\userVpc\forwardInfos;

class userVpc extends Model
{
    /**
     * @var forwardInfos[]
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
        'forwardInfos' => 'ForwardInfos',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->forwardInfos)) {
            Model::validateArray($this->forwardInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forwardInfos) {
            if (\is_array($this->forwardInfos)) {
                $res['ForwardInfos'] = [];
                $n1 = 0;
                foreach ($this->forwardInfos as $item1) {
                    $res['ForwardInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ForwardInfos'])) {
            if (!empty($map['ForwardInfos'])) {
                $model->forwardInfos = [];
                $n1 = 0;
                foreach ($map['ForwardInfos'] as $item1) {
                    $model->forwardInfos[$n1] = forwardInfos::fromMap($item1);
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
