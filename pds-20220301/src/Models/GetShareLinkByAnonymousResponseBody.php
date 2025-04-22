<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class GetShareLinkByAnonymousResponseBody extends Model
{
    /**
     * @var int
     */
    public $accessCount;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $creatorPhone;

    /**
     * @var bool
     */
    public $disableDownload;

    /**
     * @var bool
     */
    public $disablePreview;

    /**
     * @var bool
     */
    public $disableSave;

    /**
     * @var int
     */
    public $downloadCount;

    /**
     * @var int
     */
    public $downloadLimit;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var bool
     */
    public $hasPwd;

    /**
     * @var int
     */
    public $previewCount;

    /**
     * @var int
     */
    public $previewLimit;

    /**
     * @var int
     */
    public $reportCount;

    /**
     * @var int
     */
    public $saveCount;

    /**
     * @var int
     */
    public $saveDownloadLimit;

    /**
     * @var int
     */
    public $saveLimit;

    /**
     * @var string
     */
    public $shareName;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $videoPreviewCount;
    protected $_name = [
        'accessCount' => 'access_count',
        'avatar' => 'avatar',
        'creatorId' => 'creator_id',
        'creatorName' => 'creator_name',
        'creatorPhone' => 'creator_phone',
        'disableDownload' => 'disable_download',
        'disablePreview' => 'disable_preview',
        'disableSave' => 'disable_save',
        'downloadCount' => 'download_count',
        'downloadLimit' => 'download_limit',
        'expiration' => 'expiration',
        'hasPwd' => 'has_pwd',
        'previewCount' => 'preview_count',
        'previewLimit' => 'preview_limit',
        'reportCount' => 'report_count',
        'saveCount' => 'save_count',
        'saveDownloadLimit' => 'save_download_limit',
        'saveLimit' => 'save_limit',
        'shareName' => 'share_name',
        'updatedAt' => 'updated_at',
        'videoPreviewCount' => 'video_preview_count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->hasPwd) {
            $res['has_pwd'] = $this->hasPwd;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['has_pwd'])) {
            $model->hasPwd = $map['has_pwd'];
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
