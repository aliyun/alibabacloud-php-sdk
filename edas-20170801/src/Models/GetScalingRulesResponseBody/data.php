<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody\data\ruleList;

class data extends Model
{
    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $oversoldFactor;

    /**
     * @var ruleList
     */
    public $ruleList;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'oversoldFactor' => 'OversoldFactor',
        'ruleList' => 'RuleList',
        'updateTime' => 'UpdateTime',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->ruleList) {
            $this->ruleList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }

        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toArray($noStream) : $this->ruleList;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }

        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
