<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class GetShareLinkByAnonymousResponseBody extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $accessCount;

    /**
     * @example https://aliyunpds.com/a.jpg
     *
     * @var string
     */
    public $avatar;

    /**
     * @example c9b7a5aa04d14ae3867fdc886fa01da4
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example AB***CD
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 136****00
     *
     * @var string
     */
    public $creatorPhone;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableDownload;

    /**
     * @example false
     *
     * @var bool
     */
    public $disablePreview;

    /**
     * @example false
     *
     * @var bool
     */
    public $disableSave;

    /**
     * @example 50
     *
     * @var int
     */
    public $downloadCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @example 2020-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $expiration;

    /**
     * @example 80
     *
     * @var int
     */
    public $previewCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $previewLimit;

    /**
     * @example 0
     *
     * @var int
     */
    public $reportCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $saveCount;

    /**
     * @example 200
     *
     * @var int
     */
    public $saveDownloadLimit;

    /**
     * @example 100
     *
     * @var int
     */
    public $saveLimit;

    /**
     * @var string
     */
    public $shareName;

    /**
     * @example 2019-08-20T06:51:27.292Z
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example 5
     *
     * @var int
     */
    public $videoPreviewCount;
    protected $_name = [
        'accessCount'       => 'access_count',
        'avatar'            => 'avatar',
        'creatorId'         => 'creator_id',
        'creatorName'       => 'creator_name',
        'creatorPhone'      => 'creator_phone',
        'disableDownload'   => 'disable_download',
        'disablePreview'    => 'disable_preview',
        'disableSave'       => 'disable_save',
        'downloadCount'     => 'download_count',
        'downloadLimit'     => 'download_limit',
        'expiration'        => 'expiration',
        'previewCount'      => 'preview_count',
        'previewLimit'      => 'preview_limit',
        'reportCount'       => 'report_count',
        'saveCount'         => 'save_count',
        'saveDownloadLimit' => 'save_download_limit',
        'saveLimit'         => 'save_limit',
        'shareName'         => 'share_name',
        'updatedAt'         => 'updated_at',
        'videoPreviewCount' => 'video_preview_count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessCount) {
            $res['access_count'] = $this->accessCount;
        }
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->creatorId) {
            $res['creator_id'] = $this->creatorId;
        }
        if (null !== $this->creatorName) {
            $res['creator_name'] = $this->creatorName;
        }
        if (null !== $this->creatorPhone) {
            $res['creator_phone'] = $this->creatorPhone;
        }
        if (null !== $this->disableDownload) {
            $res['disable_download'] = $this->disableDownload;
        }
        if (null !== $this->disablePreview) {
            $res['disable_preview'] = $this->disablePreview;
        }
        if (null !== $this->disableSave) {
            $res['disable_save'] = $this->disableSave;
        }
        if (null !== $this->downloadCount) {
            $res['download_count'] = $this->downloadCount;
        }
        if (null !== $this->downloadLimit) {
            $res['download_limit'] = $this->downloadLimit;
        }
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }
        if (null !== $this->previewCount) {
            $res['preview_count'] = $this->previewCount;
        }
        if (null !== $this->previewLimit) {
            $res['preview_limit'] = $this->previewLimit;
        }
        if (null !== $this->reportCount) {
            $res['report_count'] = $this->reportCount;
        }
        if (null !== $this->saveCount) {
            $res['save_count'] = $this->saveCount;
        }
        if (null !== $this->saveDownloadLimit) {
            $res['save_download_limit'] = $this->saveDownloadLimit;
        }
        if (null !== $this->saveLimit) {
            $res['save_limit'] = $this->saveLimit;
        }
        if (null !== $this->shareName) {
            $res['share_name'] = $this->shareName;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->videoPreviewCount) {
            $res['video_preview_count'] = $this->videoPreviewCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetShareLinkByAnonymousResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access_count'])) {
            $model->accessCount = $map['access_count'];
        }
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['creator_id'])) {
            $model->creatorId = $map['creator_id'];
        }
        if (isset($map['creator_name'])) {
            $model->creatorName = $map['creator_name'];
        }
        if (isset($map['creator_phone'])) {
            $model->creatorPhone = $map['creator_phone'];
        }
        if (isset($map['disable_download'])) {
            $model->disableDownload = $map['disable_download'];
        }
        if (isset($map['disable_preview'])) {
            $model->disablePreview = $map['disable_preview'];
        }
        if (isset($map['disable_save'])) {
            $model->disableSave = $map['disable_save'];
        }
        if (isset($map['download_count'])) {
            $model->downloadCount = $map['download_count'];
        }
        if (isset($map['download_limit'])) {
            $model->downloadLimit = $map['download_limit'];
        }
        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }
        if (isset($map['preview_count'])) {
            $model->previewCount = $map['preview_count'];
        }
        if (isset($map['preview_limit'])) {
            $model->previewLimit = $map['preview_limit'];
        }
        if (isset($map['report_count'])) {
            $model->reportCount = $map['report_count'];
        }
        if (isset($map['save_count'])) {
            $model->saveCount = $map['save_count'];
        }
        if (isset($map['save_download_limit'])) {
            $model->saveDownloadLimit = $map['save_download_limit'];
        }
        if (isset($map['save_limit'])) {
            $model->saveLimit = $map['save_limit'];
        }
        if (isset($map['share_name'])) {
            $model->shareName = $map['share_name'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['video_preview_count'])) {
            $model->videoPreviewCount = $map['video_preview_count'];
        }

        return $model;
    }
}
