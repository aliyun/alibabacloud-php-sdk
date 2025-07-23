<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest;

use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest\appInstance\profile;
use AlibabaCloud\Tea\Model;

class appInstance extends Model
{
    /**
     * @example WEBSITE
     *
     * @var string
     */
    public $appType;

    /**
     * @example WD20250711094503000001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example fase
     *
     * @var string
     */
    public $deleted;

    /**
     * @example alliveout.xntv.tv
     *
     * @var string
     */
    public $domain;

    /**
     * @example 2024-08-23T02:14:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2025-01-01 00:00:00
     *
     * @var string
     */
    public $gmtDelete;

    /**
     * @example 2025-01-01 00:00:00
     *
     * @var string
     */
    public $gmtPublish;

    /**
     * @example icon/WS20250626112715000001/thumbnail.jpg
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var profile
     */
    public $profile;

    /**
     * @description siteId
     *
     * @example xxxx.scd.wezhan.cn
     *
     * @var string
     */
    public $siteHost;

    /**
     * @example 31104757
     *
     * @var string
     */
    public $slug;

    /**
     * @example 2025-07-15T16:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example {\\"Phase\\": \\"Running\\", \\"SlotNum\\": 1, \\"UsedCapacity\\": \\"500.0Gi\\"}
     *
     * @var string
     */
    public $status;

    /**
     * @example thumbnails/WS20250626112715000001/thumbnail.jpg
     *
     * @var string
     */
    public $thumbnailUrl;

    /**
     * @description 123123123131232
     *
     * @example 12313213131
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appType' => 'AppType',
        'bizId' => 'BizId',
        'deleted' => 'Deleted',
        'domain' => 'Domain',
        'endTime' => 'EndTime',
        'gmtDelete' => 'GmtDelete',
        'gmtPublish' => 'GmtPublish',
        'iconUrl' => 'IconUrl',
        'name' => 'Name',
        'profile' => 'Profile',
        'siteHost' => 'SiteHost',
        'slug' => 'Slug',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'thumbnailUrl' => 'ThumbnailUrl',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtDelete) {
            $res['GmtDelete'] = $this->gmtDelete;
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
        if (null !== $this->profile) {
            $res['Profile'] = null !== $this->profile ? $this->profile->toMap() : null;
        }
        if (null !== $this->siteHost) {
            $res['SiteHost'] = $this->siteHost;
        }
        if (null !== $this->slug) {
            $res['Slug'] = $this->slug;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->thumbnailUrl) {
            $res['ThumbnailUrl'] = $this->thumbnailUrl;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtDelete'])) {
            $model->gmtDelete = $map['GmtDelete'];
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
        if (isset($map['Profile'])) {
            $model->profile = profile::fromMap($map['Profile']);
        }
        if (isset($map['SiteHost'])) {
            $model->siteHost = $map['SiteHost'];
        }
        if (isset($map['Slug'])) {
            $model->slug = $map['Slug'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
