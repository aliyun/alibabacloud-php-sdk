<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateShareLinkRequest extends Model
{
    /**
     * @description The description of the share link. The description can be up to 1,024 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to prohibit the downloads of the shared files.
     *
     * @example false
     *
     * @var bool
     */
    public $disableDownload;

    /**
     * @description Specifies whether to prohibit the previews of the shared files.
     *
     * @example false
     *
     * @var bool
     */
    public $disablePreview;

    /**
     * @description Specifies whether to prohibit the saves of the shared files.
     *
     * @example false
     *
     * @var bool
     */
    public $disableSave;

    /**
     * @description The number of times that the shared files are downloaded. The value must be greater than or equal to 0.
     *
     * @example 30
     *
     * @var int
     */
    public $downloadCount;

    /**
     * @description The maximum number of times that the shared files can be downloaded. The value must be greater than or equal to 0. A value of 0 specifies that the number is unlimited.
     *
     * @example 100
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @description The time when the share link expires. The time follows the RFC 3339 standard. Example: 2020-06-28T11:33:00.000+08:00. If you leave this parameter empty, the share link never expires.
     *
     * @example 2020-06-28T11:33:00.000+08:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The number of times that the shared files are previewed. The value must be greater than or equal to 0.
     *
     * @example 3
     *
     * @var int
     */
    public $previewCount;

    /**
     * @description The maximum number of times that the shared files can be previewed. The value must be greater than or equal to 0. A value of 0 specifies that the number is unlimited.
     *
     * @example 100
     *
     * @var int
     */
    public $previewLimit;

    /**
     * @description The number of times that the shared files are reported. The value must be greater than or equal to 0.
     *
     * @example 1
     *
     * @var int
     */
    public $reportCount;

    /**
     * @description The number of times that the shared files are saved. The value must be greater than or equal to 0.
     *
     * @example 5
     *
     * @var int
     */
    public $saveCount;

    /**
     * @description The maximum number of times that the shared files can be saved. The value must be greater than or equal to 0. A value of 0 specifies that the number is unlimited.
     *
     * @example 100
     *
     * @var int
     */
    public $saveLimit;

    /**
     * @description The share ID.
     *
     * This parameter is required.
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The name of the share link. By default, the name of the first file is used. The name can be up to 128 characters in length.
     *
     * @var string
     */
    public $shareName;

    /**
     * @description The access code. The access code can be up to 64 characters in length. A value of 0 specifies an empty string.
     *
     * @example abcF123x
     *
     * @var string
     */
    public $sharePwd;

    /**
     * @description The state of the share link. Valid values:
     *
     *   disabled: The share link is canceled.
     *   enabled: The share link is effective.
     *
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of times that the videos are previewed in the shared files. The value must be greater than or equal to 0.
     *
     * @example 100
     *
     * @var int
     */
    public $videoPreviewCount;
    protected $_name = [
        'description'       => 'description',
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
        'saveLimit'         => 'save_limit',
        'shareId'           => 'share_id',
        'shareName'         => 'share_name',
        'sharePwd'          => 'share_pwd',
        'status'            => 'status',
        'videoPreviewCount' => 'video_preview_count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->saveLimit) {
            $res['save_limit'] = $this->saveLimit;
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
        if (null !== $this->videoPreviewCount) {
            $res['video_preview_count'] = $this->videoPreviewCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateShareLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['save_limit'])) {
            $model->saveLimit = $map['save_limit'];
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
        if (isset($map['video_preview_count'])) {
            $model->videoPreviewCount = $map['video_preview_count'];
        }

        return $model;
    }
}
