<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\DescribeCheckDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example PASSED
     *
     * @var string
     */
    public $checkStatus;

    /**
     * @example 1701725715
     *
     * @var int
     */
    public $checkTime;

    /**
     * @example {"ecsAutoSnapshotPolicyIds":[],"hbrBackupPlans":[{"planId":"po-xxxxxxxx","sourceType":"UDM_ECS"}]}
     *
     * @var string
     */
    public $detail;

    /**
     * @example ecs
     *
     * @var string
     */
    public $productType;

    /**
     * @example acs:ecs:123***890:cn-shanghai:instance/i-001***90
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @example i-xxxxxxxx
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example test server
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example rule-xxxxxxxx
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
    protected $_name = [
        'checkStatus'  => 'CheckStatus',
        'checkTime'    => 'CheckTime',
        'detail'       => 'Detail',
        'productType'  => 'ProductType',
        'resourceArn'  => 'ResourceArn',
        'resourceId'   => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
        'ruleId'       => 'RuleId',
        'ruleTemplate' => 'RuleTemplate',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return content
     */
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
