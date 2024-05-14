<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleGroupsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description This parameter is required.
     *
     * @example waf_cdnsdf3****
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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1011
     *
     * @var int
     */
    public $policyId;

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
     * @example rg-aek23puu7m3kmea
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 60.208.111.213
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @example 10
     *
     * @var int
     */
    public $type;

    /**
     * @example ZH
     *
     * @var string
     */
    public $wafLang;
    protected $_name = [
        'currentPage'     => 'CurrentPage',
        'instanceId'      => 'InstanceId',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'policyId'        => 'PolicyId',
        'region'          => 'Region',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'sourceIp'        => 'SourceIp',
        'type'            => 'Type',
        'wafLang'         => 'WafLang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->wafLang) {
            $res['WafLang'] = $this->wafLang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
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
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WafLang'])) {
            $model->wafLang = $map['WafLang'];
        }

        return $model;
    }
}
