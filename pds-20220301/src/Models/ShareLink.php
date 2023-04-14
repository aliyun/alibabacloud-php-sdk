<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ShareLink extends Model
{
    /**
     * @var int
     */
    public $accessCount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

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
    public $driveId;

    /**
     * @var string
     */
    public $expiration;

    /**
     * @var bool
     */
    public $expired;

    /**
     * @var string[]
     */
    public $fileIdList;

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
    public $saveLimit;

    /**
     * @var bool
     */
    public $shareAllFiles;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $shareName;

    /**
     * @var string
     */
    public $sharePwd;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $videoPreviewCount;
    protected $_name = [
        'accessCount'       => 'access_count',
        'createdAt'         => 'created_at',
        'creator'           => 'creator',
        'description'       => 'description',
        'disableDownload'   => 'disable_download',
        'disablePreview'    => 'disable_preview',
        'disableSave'       => 'disable_save',
        'downloadCount'     => 'download_count',
        'downloadLimit'     => 'download_limit',
        'driveId'           => 'drive_id',
        'expiration'        => 'expiration',
        'expired'           => 'expired',
        'fileIdList'        => 'file_id_list',
        'previewCount'      => 'preview_count',
        'previewLimit'      => 'preview_limit',
        'reportCount'       => 'report_count',
        'saveCount'         => 'save_count',
        'saveLimit'         => 'save_limit',
        'shareAllFiles'     => 'share_all_files',
        'shareId'           => 'share_id',
        'shareName'         => 'share_name',
        'sharePwd'          => 'share_pwd',
        'status'            => 'status',
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
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }
        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
        }
        if (null !== $this->fileIdList) {
            $res['file_id_list'] = $this->fileIdList;
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
        if (null !== $this->saveLimit) {
            $res['save_limit'] = $this->saveLimit;
        }
        if (null !== $this->shareAllFiles) {
            $res['share_all_files'] = $this->shareAllFiles;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->shareName) {
            $res['share_name'] = $this->shareName;
        }
        if (null !== $this->sharePwd) {
            $res['share_pwd'] = $this->sharePwd;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
     * @return ShareLink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access_count'])) {
            $model->accessCount = $map['access_count'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }
        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }
        if (isset($map['file_id_list'])) {
            if (!empty($map['file_id_list'])) {
                $model->fileIdList = $map['file_id_list'];
            }
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
        if (isset($map['save_limit'])) {
            $model->saveLimit = $map['save_limit'];
        }
        if (isset($map['share_all_files'])) {
            $model->shareAllFiles = $map['share_all_files'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['share_name'])) {
            $model->shareName = $map['share_name'];
        }
        if (isset($map['share_pwd'])) {
            $model->sharePwd = $map['share_pwd'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
