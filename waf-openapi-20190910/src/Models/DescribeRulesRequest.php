<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeRulesRequest extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $applicationType;

    /**
     * @description CVE ID
     *
     * @example CVE-*-*5
     *
     * @var string
     */
    public $cveIdKey;

    /**
     * @description This parameter is required.
     *
     * @example waf-cn-*
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 11
     *
     * @var int
     */
    public $protectionType;

    /**
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-*
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 0
     *
     * @var int
     */
    public $riskLevel;

    /**
     * @description This parameter is required.
     *
     * @example 1012
     *
     * @var int
     */
    public $ruleGroupId;

    /**
     * @example 1131*0
     *
     * @var string
     */
    public $ruleIdKey;

    /**
     * @example 42.84.*.*
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'applicationType' => 'ApplicationType',
        'cveIdKey'        => 'CveIdKey',
        'instanceId'      => 'InstanceId',
        'lang'            => 'Lang',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'protectionType'  => 'ProtectionType',
        'region'          => 'Region',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'riskLevel'       => 'RiskLevel',
        'ruleGroupId'     => 'RuleGroupId',
        'ruleIdKey'       => 'RuleIdKey',
        'sourceIp'        => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }
        if (null !== $this->cveIdKey) {
            $res['CveIdKey'] = $this->cveIdKey;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->protectionType) {
            $res['ProtectionType'] = $this->protectionType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->ruleGroupId) {
            $res['RuleGroupId'] = $this->ruleGroupId;
        }
        if (null !== $this->ruleIdKey) {
            $res['RuleIdKey'] = $this->ruleIdKey;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }
        if (isset($map['CveIdKey'])) {
            $model->cveIdKey = $map['CveIdKey'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProtectionType'])) {
            $model->protectionType = $map['ProtectionType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RuleGroupId'])) {
            $model->ruleGroupId = $map['RuleGroupId'];
        }
        if (isset($map['RuleIdKey'])) {
            $model->ruleIdKey = $map['RuleIdKey'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
