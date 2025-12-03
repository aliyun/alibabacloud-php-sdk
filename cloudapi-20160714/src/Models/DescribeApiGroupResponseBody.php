<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\customDomains;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiGroupResponseBody\stageItems;

class DescribeApiGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $billingStatus;

    /**
     * @var bool
     */
    public $cloudMarketCommodity;

    /**
     * @var string
     */
    public $cmsMonitorGroup;

    /**
     * @var string
     */
    public $compatibleFlags;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $customAppCodeConfig;

    /**
     * @var customDomains
     */
    public $customDomains;

    /**
     * @var string
     */
    public $customTraceConfig;

    /**
     * @var string
     */
    public $customerConfigs;

    /**
     * @var string
     */
    public $dedicatedInstanceType;

    /**
     * @var string
     */
    public $defaultDomain;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $disableInnerDomain;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $httpsPolicy;

    /**
     * @var string
     */
    public $illegalStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ipv6Status;

    /**
     * @var string
     */
    public $migrationError;

    /**
     * @var string
     */
    public $migrationStatus;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $passthroughHeaders;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stageItems
     */
    public $stageItems;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var int
     */
    public $trafficLimit;

    /**
     * @var string
     */
    public $userLogConfig;

    /**
     * @var string
     */
    public $vpcDomain;

    /**
     * @var string
     */
    public $vpcSlbIntranetDomain;
    protected $_name = [
        'basePath' => 'BasePath',
        'billingStatus' => 'BillingStatus',
        'cloudMarketCommodity' => 'CloudMarketCommodity',
        'cmsMonitorGroup' => 'CmsMonitorGroup',
        'compatibleFlags' => 'CompatibleFlags',
        'createdTime' => 'CreatedTime',
        'customAppCodeConfig' => 'CustomAppCodeConfig',
        'customDomains' => 'CustomDomains',
        'customTraceConfig' => 'CustomTraceConfig',
        'customerConfigs' => 'CustomerConfigs',
        'dedicatedInstanceType' => 'DedicatedInstanceType',
        'defaultDomain' => 'DefaultDomain',
        'description' => 'Description',
        'disableInnerDomain' => 'DisableInnerDomain',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'httpsPolicy' => 'HttpsPolicy',
        'illegalStatus' => 'IllegalStatus',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'ipv6Status' => 'Ipv6Status',
        'migrationError' => 'MigrationError',
        'migrationStatus' => 'MigrationStatus',
        'modifiedTime' => 'ModifiedTime',
        'passthroughHeaders' => 'PassthroughHeaders',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'stageItems' => 'StageItems',
        'status' => 'Status',
        'subDomain' => 'SubDomain',
        'trafficLimit' => 'TrafficLimit',
        'userLogConfig' => 'UserLogConfig',
        'vpcDomain' => 'VpcDomain',
        'vpcSlbIntranetDomain' => 'VpcSlbIntranetDomain',
    ];

    public function validate()
    {
        if (null !== $this->customDomains) {
            $this->customDomains->validate();
        }
        if (null !== $this->stageItems) {
            $this->stageItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['BasePath'] = $this->basePath;
        }

        if (null !== $this->billingStatus) {
            $res['BillingStatus'] = $this->billingStatus;
        }

        if (null !== $this->cloudMarketCommodity) {
            $res['CloudMarketCommodity'] = $this->cloudMarketCommodity;
        }

        if (null !== $this->cmsMonitorGroup) {
            $res['CmsMonitorGroup'] = $this->cmsMonitorGroup;
        }

        if (null !== $this->compatibleFlags) {
            $res['CompatibleFlags'] = $this->compatibleFlags;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->customAppCodeConfig) {
            $res['CustomAppCodeConfig'] = $this->customAppCodeConfig;
        }

        if (null !== $this->customDomains) {
            $res['CustomDomains'] = null !== $this->customDomains ? $this->customDomains->toArray($noStream) : $this->customDomains;
        }

        if (null !== $this->customTraceConfig) {
            $res['CustomTraceConfig'] = $this->customTraceConfig;
        }

        if (null !== $this->customerConfigs) {
            $res['CustomerConfigs'] = $this->customerConfigs;
        }

        if (null !== $this->dedicatedInstanceType) {
            $res['DedicatedInstanceType'] = $this->dedicatedInstanceType;
        }

        if (null !== $this->defaultDomain) {
            $res['DefaultDomain'] = $this->defaultDomain;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->disableInnerDomain) {
            $res['DisableInnerDomain'] = $this->disableInnerDomain;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }

        if (null !== $this->illegalStatus) {
            $res['IllegalStatus'] = $this->illegalStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ipv6Status) {
            $res['Ipv6Status'] = $this->ipv6Status;
        }

        if (null !== $this->migrationError) {
            $res['MigrationError'] = $this->migrationError;
        }

        if (null !== $this->migrationStatus) {
            $res['MigrationStatus'] = $this->migrationStatus;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->passthroughHeaders) {
            $res['PassthroughHeaders'] = $this->passthroughHeaders;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stageItems) {
            $res['StageItems'] = null !== $this->stageItems ? $this->stageItems->toArray($noStream) : $this->stageItems;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        if (null !== $this->trafficLimit) {
            $res['TrafficLimit'] = $this->trafficLimit;
        }

        if (null !== $this->userLogConfig) {
            $res['UserLogConfig'] = $this->userLogConfig;
        }

        if (null !== $this->vpcDomain) {
            $res['VpcDomain'] = $this->vpcDomain;
        }

        if (null !== $this->vpcSlbIntranetDomain) {
            $res['VpcSlbIntranetDomain'] = $this->vpcSlbIntranetDomain;
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
        if (isset($map['BasePath'])) {
            $model->basePath = $map['BasePath'];
        }

        if (isset($map['BillingStatus'])) {
            $model->billingStatus = $map['BillingStatus'];
        }

        if (isset($map['CloudMarketCommodity'])) {
            $model->cloudMarketCommodity = $map['CloudMarketCommodity'];
        }

        if (isset($map['CmsMonitorGroup'])) {
            $model->cmsMonitorGroup = $map['CmsMonitorGroup'];
        }

        if (isset($map['CompatibleFlags'])) {
            $model->compatibleFlags = $map['CompatibleFlags'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['CustomAppCodeConfig'])) {
            $model->customAppCodeConfig = $map['CustomAppCodeConfig'];
        }

        if (isset($map['CustomDomains'])) {
            $model->customDomains = customDomains::fromMap($map['CustomDomains']);
        }

        if (isset($map['CustomTraceConfig'])) {
            $model->customTraceConfig = $map['CustomTraceConfig'];
        }

        if (isset($map['CustomerConfigs'])) {
            $model->customerConfigs = $map['CustomerConfigs'];
        }

        if (isset($map['DedicatedInstanceType'])) {
            $model->dedicatedInstanceType = $map['DedicatedInstanceType'];
        }

        if (isset($map['DefaultDomain'])) {
            $model->defaultDomain = $map['DefaultDomain'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisableInnerDomain'])) {
            $model->disableInnerDomain = $map['DisableInnerDomain'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }

        if (isset($map['IllegalStatus'])) {
            $model->illegalStatus = $map['IllegalStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Ipv6Status'])) {
            $model->ipv6Status = $map['Ipv6Status'];
        }

        if (isset($map['MigrationError'])) {
            $model->migrationError = $map['MigrationError'];
        }

        if (isset($map['MigrationStatus'])) {
            $model->migrationStatus = $map['MigrationStatus'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['PassthroughHeaders'])) {
            $model->passthroughHeaders = $map['PassthroughHeaders'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StageItems'])) {
            $model->stageItems = stageItems::fromMap($map['StageItems']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        if (isset($map['TrafficLimit'])) {
            $model->trafficLimit = $map['TrafficLimit'];
        }

        if (isset($map['UserLogConfig'])) {
            $model->userLogConfig = $map['UserLogConfig'];
        }

        if (isset($map['VpcDomain'])) {
            $model->vpcDomain = $map['VpcDomain'];
        }

        if (isset($map['VpcSlbIntranetDomain'])) {
            $model->vpcSlbIntranetDomain = $map['VpcSlbIntranetDomain'];
        }

        return $model;
    }
}
