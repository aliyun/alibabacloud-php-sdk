<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListSitesResponseBody;

use AlibabaCloud\Dara\Model;

class sites extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $cnameZone;

    /**
     * @var string
     */
    public $coverage;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nameServerList;

    /**
     * @var string
     */
    public $offlineReason;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var string
     */
    public $planSpecName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $verifyCode;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
