<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody\data\ruleList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $oversoldFactor;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var ruleList
     */
    public $ruleList;
    protected $_name = [
        'oversoldFactor' => 'OversoldFactor',
        'vpcId'          => 'VpcId',
        'updateTime'     => 'UpdateTime',
        'clusterType'    => 'ClusterType',
        'ruleList'       => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->oversoldFactor) {
            $res['OversoldFactor'] = $this->oversoldFactor;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->ruleList) {
            $res['RuleList'] = null !== $this->ruleList ? $this->ruleList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OversoldFactor'])) {
            $model->oversoldFactor = $map['OversoldFactor'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['RuleList'])) {
            $model->ruleList = ruleList::fromMap($map['RuleList']);
        }

        return $model;
    }
}
