<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeMajorProtectionBlackIpsRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address that you want to query. You can specify this parameter to query an IP address in the IP address blacklist for major event protection by using fuzzy matching.
     *
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $ipLike;

    /**
     * @description The method that you want to use to sort the IP addresses **in descending order**. Valid values:
     *
     *   **gmtModified:** sorts the IP addresses by most recent modification time.
     *   **ip:** sorts the IP addresses by IP address.
     *   **templateId:** sorts the IP addresses by template ID.
     *   **id:** sorts the IP addresses by primary key.
     *
     * @example gmtModified
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The ID of the IP address blacklist rule for major event protection.
     *
     * @example 20013199
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The ID of the rule template for major event protection.
     *
     * @example 5673
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'ipLike'                         => 'IpLike',
        'orderBy'                        => 'OrderBy',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'ruleId'                         => 'RuleId',
        'templateId'                     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipLike) {
            $res['IpLike'] = $this->ipLike;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMajorProtectionBlackIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpLike'])) {
            $model->ipLike = $map['IpLike'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
