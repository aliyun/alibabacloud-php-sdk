<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\DescribeOnlineTestResultResponseBody;

use AlibabaCloud\Dara\Model;

class summaryList extends Model
{
    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var int[]
     */
    public $riskLevelSummary;

    /**
     * @var int
     */
    public $sliceCount;
    protected $_name = [
        'resourceType' => 'ResourceType',
        'riskLevel' => 'RiskLevel',
        'riskLevelSummary' => 'RiskLevelSummary',
        'sliceCount' => 'SliceCount',
    ];

    public function validate()
    {
        if (\is_array($this->riskLevelSummary)) {
            Model::validateArray($this->riskLevelSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->riskLevelSummary) {
            if (\is_array($this->riskLevelSummary)) {
                $res['RiskLevelSummary'] = [];
                foreach ($this->riskLevelSummary as $key1 => $value1) {
                    $res['RiskLevelSummary'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sliceCount) {
            $res['SliceCount'] = $this->sliceCount;
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['RiskLevelSummary'])) {
            if (!empty($map['RiskLevelSummary'])) {
                $model->riskLevelSummary = [];
                foreach ($map['RiskLevelSummary'] as $key1 => $value1) {
                    $model->riskLevelSummary[$key1] = $value1;
                }
            }
        }

        if (isset($map['SliceCount'])) {
            $model->sliceCount = $map['SliceCount'];
        }

        return $model;
    }
}
