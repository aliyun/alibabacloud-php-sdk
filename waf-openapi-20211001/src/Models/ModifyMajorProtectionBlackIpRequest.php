<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyMajorProtectionBlackIpRequest extends Model
{
    /**
     * @description The description of the IP address blacklist.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time after which the IP address blacklist becomes invalid. Unit: seconds.
     *
     * >  If you set this parameter to **0**, the blacklist is permanently valid.
     *
     * This parameter is required.
     * @example 1662603328
     *
     * @var int
     */
    public $expiredTime;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP addresses that you want to add to the IP address blacklist. You can specify multiple CIDR blocks or IP addresses. IPv4 and IPv6 addresses are supported. Separate the CIDR blocks or IP addresses with commas (,). For more information, see [Protection for major events](https://help.aliyun.com/document_detail/425591.html).
     *
     * This parameter is required.
     * @example 12.XX.XX.2,3.XX.XX.3/24
     *
     * @var string
     */
    public $ipList;

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
     * This parameter is required.
     * @example 20012033
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The ID of the IP address blacklist rule template for major event protection.
     *
     * This parameter is required.
     * @example 5132
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'description'                    => 'Description',
        'expiredTime'                    => 'ExpiredTime',
        'instanceId'                     => 'InstanceId',
        'ipList'                         => 'IpList',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
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
     * @return ModifyMajorProtectionBlackIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
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
