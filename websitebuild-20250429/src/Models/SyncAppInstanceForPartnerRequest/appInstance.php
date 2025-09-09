<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\SyncAppInstanceForPartnerRequest\appInstance\profile;

class appInstance extends Model
{
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
    public $deleted;

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
    public $gmtDelete;

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
     * @var profile
     */
    public $profile;

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
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $thumbnailUrl;

    /**
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

    public function validate()
    {
        if (null !== $this->profile) {
            $this->profile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['Profile'] = null !== $this->profile ? $this->profile->toArray($noStream) : $this->profile;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
