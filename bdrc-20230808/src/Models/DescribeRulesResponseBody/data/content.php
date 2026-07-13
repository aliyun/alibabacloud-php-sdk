<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var int
     */
    public $checkFailedResourceCount;

    /**
     * @var string
     */
    public $checkStatus;

    /**
     * @var int
     */
    public $checkTime;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var int
     */
    public $riskyResourceCount;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleTemplate;

    /**
     * @var int
     */
    public $totalResourceCount;
    protected $_name = [
        'checkFailedResourceCount' => 'CheckFailedResourceCount',
        'checkStatus' => 'CheckStatus',
        'checkTime' => 'CheckTime',
        'productType' => 'ProductType',
        'resourceType' => 'ResourceType',
        'riskyResourceCount' => 'RiskyResourceCount',
        'ruleId' => 'RuleId',
        'ruleTemplate' => 'RuleTemplate',
        'totalResourceCount' => 'TotalResourceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
