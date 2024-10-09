<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $checkFailedResourceCount;

    /**
     * @example PASSED
     *
     * @var string
     */
    public $checkStatus;

    /**
     * @example 1704157635
     *
     * @var int
     */
    public $checkTime;

    /**
     * @example ecs
     *
     * @var string
     */
    public $productType;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example 0
     *
     * @var int
     */
    public $riskyResourceCount;

    /**
     * @example rule-bp11ggd8wr762
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example ecs-backup
     *
     * @var string
     */
    public $ruleTemplate;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalResourceCount;
    protected $_name = [
        'checkFailedResourceCount' => 'CheckFailedResourceCount',
        'checkStatus'              => 'CheckStatus',
        'checkTime'                => 'CheckTime',
        'productType'              => 'ProductType',
        'resourceType'             => 'ResourceType',
        'riskyResourceCount'       => 'RiskyResourceCount',
        'ruleId'                   => 'RuleId',
        'ruleTemplate'             => 'RuleTemplate',
        'totalResourceCount'       => 'TotalResourceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkFailedResourceCount) {
            $res['CheckFailedResourceCount'] = $this->checkFailedResourceCount;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->riskyResourceCount) {
            $res['RiskyResourceCount'] = $this->riskyResourceCount;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleTemplate) {
            $res['RuleTemplate'] = $this->ruleTemplate;
        }
        if (null !== $this->totalResourceCount) {
            $res['TotalResourceCount'] = $this->totalResourceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckFailedResourceCount'])) {
            $model->checkFailedResourceCount = $map['CheckFailedResourceCount'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RiskyResourceCount'])) {
            $model->riskyResourceCount = $map['RiskyResourceCount'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleTemplate'])) {
            $model->ruleTemplate = $map['RuleTemplate'];
        }
        if (isset($map['TotalResourceCount'])) {
            $model->totalResourceCount = $map['TotalResourceCount'];
        }

        return $model;
    }
}
