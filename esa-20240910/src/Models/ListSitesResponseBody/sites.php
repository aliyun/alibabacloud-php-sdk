<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesResponseBody;

use AlibabaCloud\Tea\Model;

class sites extends Model
{
    /**
     * @description Site access type. Values:
     *
     * - **NS**: Access through NS.
     * - **CNAME**: Access through CNAME.
     *
     * @example NS
     *
     * @var string
     */
    public $accessType;

    /**
     * @description CNAME suffix of the site. For sites accessed via CNAME, this is the CNAME suffix that needs to be configured.
     *
     * @example example.cname.com
     *
     * @var string
     */
    public $cnameZone;

    /**
     * @description Site acceleration region. Values:
     *
     * - **domestic**: China mainland only.
     * - **global**: Global.
     * - **overseas**: Global (excluding China mainland).
     *
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @description Site creation time, in ISO8601 format and using UTC time, formatted as yyyy-MM-ddTHH:mm:ssZ.
     *
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the plan instance bound to the site.
     *
     * @example onBvtlmIyeXLbiDw81F9
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The list of NS (Name Servers) assigned to the site. Separated by commas (,).
     *
     * @example male1-1.ialicdn.com,female1-1.ialicdn.com
     *
     * @var string
     */
    public $nameServerList;

    /**
     * @var string
     */
    public $offlineReason;

    /**
     * @description The name of the plan.
     *
     * @example plan-168656498****
     *
     * @var string
     */
    public $planName;

    /**
     * @description The specification name of the site\\"s plan.
     *
     * @example normal
     *
     * @var string
     */
    public $planSpecName;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek26g6i6se6pna
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The site ID.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The name of the site.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @description The status of the site. Possible values:
     * - **pending**: The site is pending configuration.
     * - **active**: The site is active.
     * - **offline**: The site is offline.
     * - **moved**: The site has been replaced.
     *
     * @example pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the site.
     *
     * @example {"tag1":"value1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The update time of the site, represented in ISO8601 format and using UTC, formatted as yyyy-MM-ddTHH:mm:ssZ.
     *
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The verification code for site ownership. When the site is accessed via CNAME, this TXT verification code needs to be configured.
     *
     * @example verify_d516cb3740f81f0cef77d162edd1****
     *
     * @var string
     */
    public $verifyCode;

    /**
     * @description The visit time of the site, formatted according to ISO8601 and using UTC, in the format yyyy-MM-ddTHH:mm:ssZ.
     *
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $visitTime;
    protected $_name = [
        'accessType' => 'AccessType',
        'cnameZone' => 'CnameZone',
        'coverage' => 'Coverage',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'nameServerList' => 'NameServerList',
        'offlineReason' => 'OfflineReason',
        'planName' => 'PlanName',
        'planSpecName' => 'PlanSpecName',
        'resourceGroupId' => 'ResourceGroupId',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
        'status' => 'Status',
        'tags' => 'Tags',
        'updateTime' => 'UpdateTime',
        'verifyCode' => 'VerifyCode',
        'visitTime' => 'VisitTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }
        if (null !== $this->cnameZone) {
            $res['CnameZone'] = $this->cnameZone;
        }
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nameServerList) {
            $res['NameServerList'] = $this->nameServerList;
        }
        if (null !== $this->offlineReason) {
            $res['OfflineReason'] = $this->offlineReason;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planSpecName) {
            $res['PlanSpecName'] = $this->planSpecName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->verifyCode) {
            $res['VerifyCode'] = $this->verifyCode;
        }
        if (null !== $this->visitTime) {
            $res['VisitTime'] = $this->visitTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sites
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }
        if (isset($map['CnameZone'])) {
            $model->cnameZone = $map['CnameZone'];
        }
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NameServerList'])) {
            $model->nameServerList = $map['NameServerList'];
        }
        if (isset($map['OfflineReason'])) {
            $model->offlineReason = $map['OfflineReason'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanSpecName'])) {
            $model->planSpecName = $map['PlanSpecName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VerifyCode'])) {
            $model->verifyCode = $map['VerifyCode'];
        }
        if (isset($map['VisitTime'])) {
            $model->visitTime = $map['VisitTime'];
        }

        return $model;
    }
}
