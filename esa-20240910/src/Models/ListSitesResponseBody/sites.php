<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesResponseBody;

use AlibabaCloud\Tea\Model;

class sites extends Model
{
    /**
     * @description The DNS setup for the website. Valid values:
     *
     *   **NS**
     *   **CNAME**
     *
     * @example NS
     *
     * @var string
     */
    public $accessType;

    /**
     * @description The CNAME of the website domain. If you use CNAME setup when you add your website to ESA, the value is the CNAME that you configured then.
     *
     * @example example.cname.com
     *
     * @var string
     */
    public $cnameZone;

    /**
     * @description The service location for the website. Valid values:
     *
     *   **domestic**: the Chinese mainland
     *   **global**: global
     *   **overseas**: outside the Chinese mainland
     *
     * @example domestic
     *
     * @var string
     */
    public $coverage;

    /**
     * @description The time when the website was added. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the plan associated with the website.
     *
     * @example onBvtlmIyeXLbiDw81F9
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The nameservers assigned to the website domain, which are separated by commas (,).
     *
     * @example male1-1.ialicdn.com,female1-1.ialicdn.com
     *
     * @var string
     */
    public $nameServerList;

    /**
     * @description The plan name.
     *
     * @example plan-168656498****
     *
     * @var string
     */
    public $planName;

    /**
     * @description The plan associated with the website.
     *
     * @example normal
     *
     * @var string
     */
    public $planSpecName;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aek26g6i6se6pna
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The website ID.
     *
     * @example 123456789****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The website name.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @description The website status. Valid values:
     *
     *   **pending**: The website is to be configured.
     *   **active**: The website is active.
     *   **offline**: The website is suspended.
     *   **moved**: The website has been added and verified by another Alibaba Cloud account.
     *
     * @example pending
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the website.
     *
     * @example {"tag1":"value1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The time when the website was updated. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The code that is used to verify the website domain ownership. As part of the verification TXT record, this parameter is returned for websites that use CNAME setup.
     *
     * @example verify_d516cb3740f81f0cef77d162edd1****
     *
     * @var string
     */
    public $verifyCode;

    /**
     * @description null
     *
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $visitTime;
    protected $_name = [
        'accessType'      => 'AccessType',
        'cnameZone'       => 'CnameZone',
        'coverage'        => 'Coverage',
        'createTime'      => 'CreateTime',
        'instanceId'      => 'InstanceId',
        'nameServerList'  => 'NameServerList',
        'planName'        => 'PlanName',
        'planSpecName'    => 'PlanSpecName',
        'resourceGroupId' => 'ResourceGroupId',
        'siteId'          => 'SiteId',
        'siteName'        => 'SiteName',
        'status'          => 'Status',
        'tags'            => 'Tags',
        'updateTime'      => 'UpdateTime',
        'verifyCode'      => 'VerifyCode',
        'visitTime'       => 'VisitTime',
    ];

    public function validate()
    {
    }

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
