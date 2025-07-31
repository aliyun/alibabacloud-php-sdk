<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody;

use AlibabaCloud\Tea\Model;

class summaryList extends Model
{
    /**
     * @example video
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @var int[]
     */
    public $riskLevelSummary;

    /**
     * @example 10
     *
     * @var int
     */
    public $sliceCount;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'riskLevel' => 'RiskLevel',
        'riskLevelSummary' => 'RiskLevelSummary',
        'sliceCount' => 'SliceCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskLevelSummary) {
            $res['RiskLevelSummary'] = $this->riskLevelSummary;
        }
        if (null !== $this->sliceCount) {
            $res['SliceCount'] = $this->sliceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summaryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskLevelSummary'])) {
            $model->riskLevelSummary = $map['RiskLevelSummary'];
        }
        if (isset($map['SliceCount'])) {
            $model->sliceCount = $map['SliceCount'];
        }

        return $model;
    }
}
