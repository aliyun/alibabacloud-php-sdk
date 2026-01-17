<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AppInstanceAggregate\partnerDetail;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\AppInstanceAggregate\tags;

class AppInstanceAggregate extends Model
{
    /**
     * @var AppAiStaff[]
     */
    public $aiStaffList;

    /**
     * @var AppOperationAddress
     */
    public $appOperationAddress;

    /**
     * @var AppServiceAggregate[]
     */
    public $appServiceList;

    /**
     * @var string
     */
    public $appSubType;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $buildType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $deleted;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $designSpecBizId;

    /**
     * @var string
     */
    public $designSpecId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $espBizId;

    /**
     * @var string
     */
    public $gmtDelete;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtPublish;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var partnerDetail
     */
    public $partnerDetail;

    /**
     * @var AppInstanceProfile
     */
    public $profile;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $siteHost;

    /**
     * @var string
     */
    public $slug;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusText;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $thumbnailUrl;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'aiStaffList' => 'AiStaffList',
        'appOperationAddress' => 'AppOperationAddress',
        'appServiceList' => 'AppServiceList',
        'appSubType' => 'AppSubType',
        'appType' => 'AppType',
        'bizId' => 'BizId',
        'buildType' => 'BuildType',
        'createTime' => 'CreateTime',
        'deleted' => 'Deleted',
        'description' => 'Description',
        'designSpecBizId' => 'DesignSpecBizId',
        'designSpecId' => 'DesignSpecId',
        'domain' => 'Domain',
        'endTime' => 'EndTime',
        'espBizId' => 'EspBizId',
        'gmtDelete' => 'GmtDelete',
        'gmtModified' => 'GmtModified',
        'gmtPublish' => 'GmtPublish',
        'iconUrl' => 'IconUrl',
        'name' => 'Name',
        'partnerDetail' => 'PartnerDetail',
        'profile' => 'Profile',
        'resourceGroupId' => 'ResourceGroupId',
        'siteHost' => 'SiteHost',
        'slug' => 'Slug',
        'sourceType' => 'SourceType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'statusText' => 'StatusText',
        'tags' => 'Tags',
        'thumbnailUrl' => 'ThumbnailUrl',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->aiStaffList)) {
            Model::validateArray($this->aiStaffList);
        }
        if (null !== $this->appOperationAddress) {
            $this->appOperationAddress->validate();
        }
        if (\is_array($this->appServiceList)) {
            Model::validateArray($this->appServiceList);
        }
        if (null !== $this->partnerDetail) {
            $this->partnerDetail->validate();
        }
        if (null !== $this->profile) {
            $this->profile->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiStaffList) {
            if (\is_array($this->aiStaffList)) {
                $res['AiStaffList'] = [];
                $n1 = 0;
                foreach ($this->aiStaffList as $item1) {
                    $res['AiStaffList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appOperationAddress) {
            $res['AppOperationAddress'] = null !== $this->appOperationAddress ? $this->appOperationAddress->toArray($noStream) : $this->appOperationAddress;
        }

        if (null !== $this->appServiceList) {
            if (\is_array($this->appServiceList)) {
                $res['AppServiceList'] = [];
                $n1 = 0;
                foreach ($this->appServiceList as $item1) {
                    $res['AppServiceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appSubType) {
            $res['AppSubType'] = $this->appSubType;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->buildType) {
            $res['BuildType'] = $this->buildType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->designSpecBizId) {
            $res['DesignSpecBizId'] = $this->designSpecBizId;
        }

        if (null !== $this->designSpecId) {
            $res['DesignSpecId'] = $this->designSpecId;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->espBizId) {
            $res['EspBizId'] = $this->espBizId;
        }

        if (null !== $this->gmtDelete) {
            $res['GmtDelete'] = $this->gmtDelete;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->gmtPublish) {
            $res['GmtPublish'] = $this->gmtPublish;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->partnerDetail) {
            $res['PartnerDetail'] = null !== $this->partnerDetail ? $this->partnerDetail->toArray($noStream) : $this->partnerDetail;
        }

        if (null !== $this->profile) {
            $res['Profile'] = null !== $this->profile ? $this->profile->toArray($noStream) : $this->profile;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->siteHost) {
            $res['SiteHost'] = $this->siteHost;
        }

        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusText) {
            $res['StatusText'] = $this->statusText;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->thumbnailUrl) {
            $res['ThumbnailUrl'] = $this->thumbnailUrl;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AiStaffList'])) {
            if (!empty($map['AiStaffList'])) {
                $model->aiStaffList = [];
                $n1 = 0;
                foreach ($map['AiStaffList'] as $item1) {
                    $model->aiStaffList[$n1] = AppAiStaff::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AppOperationAddress'])) {
            $model->appOperationAddress = AppOperationAddress::fromMap($map['AppOperationAddress']);
        }

        if (isset($map['AppServiceList'])) {
            if (!empty($map['AppServiceList'])) {
                $model->appServiceList = [];
                $n1 = 0;
                foreach ($map['AppServiceList'] as $item1) {
                    $model->appServiceList[$n1] = AppServiceAggregate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AppSubType'])) {
            $model->appSubType = $map['AppSubType'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['BuildType'])) {
            $model->buildType = $map['BuildType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DesignSpecBizId'])) {
            $model->designSpecBizId = $map['DesignSpecBizId'];
        }

        if (isset($map['DesignSpecId'])) {
            $model->designSpecId = $map['DesignSpecId'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EspBizId'])) {
            $model->espBizId = $map['EspBizId'];
        }

        if (isset($map['GmtDelete'])) {
            $model->gmtDelete = $map['GmtDelete'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GmtPublish'])) {
            $model->gmtPublish = $map['GmtPublish'];
        }

        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PartnerDetail'])) {
            $model->partnerDetail = partnerDetail::fromMap($map['PartnerDetail']);
        }

        if (isset($map['Profile'])) {
            $model->profile = AppInstanceProfile::fromMap($map['Profile']);
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SiteHost'])) {
            $model->siteHost = $map['SiteHost'];
        }

        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusText'])) {
            $model->statusText = $map['StatusText'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ThumbnailUrl'])) {
            $model->thumbnailUrl = $map['ThumbnailUrl'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
