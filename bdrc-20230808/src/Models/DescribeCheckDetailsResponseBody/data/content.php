<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeCheckDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class content extends Model
{
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
    public $detail;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleTemplate;
    protected $_name = [
        'checkStatus' => 'CheckStatus',
        'checkTime' => 'CheckTime',
        'detail' => 'Detail',
        'productType' => 'ProductType',
        'resourceArn' => 'ResourceArn',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'ruleId' => 'RuleId',
        'ruleTemplate' => 'RuleTemplate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }

        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleTemplate) {
            $res['RuleTemplate'] = $this->ruleTemplate;
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
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }

        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleTemplate'])) {
            $model->ruleTemplate = $map['RuleTemplate'];
        }

        return $model;
    }
}
