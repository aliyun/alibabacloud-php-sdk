<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateShareLinkRequest extends Model
{
    /**
     * @var bool
     */
    public $creatable;

    /**
     * @var string[]
     */
    public $creatableFileIdList;

    /**
     * @description The description of the share. The description must be 0 to 1,024 characters in length.
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to disable the download feature.
     *
     * @example false
     *
     * @var bool
     */
    public $disableDownload;

    /**
     * @description Specifies whether to disable the preview feature.
     *
     * @example false
     *
     * @var bool
     */
    public $disablePreview;

    /**
     * @description Specifies whether to disable the dump feature.
     *
     * @example false
     *
     * @var bool
     */
    public $disableSave;

    /**
     * @description The limit on the number of times that the shared files can be downloaded. The value of this parameter must be equal to or greater than 0. A value of 0 indicates no limit.
     *
     * @example 100
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @description The drive ID.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The time when the share URL expires. The value of this parameter follows the RFC 3339 standard. Example: "2020-06-28T11:33:00.000+08:00". If expiration is set to "", the share URL never expires.
     *
     * @example 2020-06-28T11:33:00.000+08:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @description The IDs of the files to share in the parent path. The number of files in the parent path ranges from 1 to 100. If share_all_files is set to true, this parameter does not take effect. Otherwise, you must specify this parameter.``
     *
     * @example ["520b217f13adf4fc24f2191991b1664ce045b393"]
     *
     * @var string[]
     */
    public $fileIdList;

    /**
     * @description The limit on the number of times that the shared files can be previewed. The value of this parameter must be equal to or greater than 0. A value of 0 indicates no limit.
     *
     * @example 100
     *
     * @var int
     */
    public $previewLimit;

    /**
     * @description The limit on the number of times that the shared files can be dumped. The value of this parameter must be equal to or greater than 0. A value of 0 indicates no limit.
     *
     * @example 100
     *
     * @var int
     */
    public $saveLimit;

    /**
     * @description Specifies whether to share all files in the drive.
     *
     * @example true
     *
     * @var bool
     */
    public $shareAllFiles;

    /**
     * @description The name of the share. If you leave this parameter empty, the file name that corresponds to the first ID in the file ID list is used. The name must be 0 to 128 characters in length.
     *
     * @var string
     */
    public $shareName;

    /**
     * @description The access code. An access code must be 0 to 64 bytes in length. If you do not specify this parameter or leave this parameter empty, the files can be accessed without an access code. In this case, you do not need to specify the share_pwd parameter when you call an operation to query the share URL. The access code can contain only visible ASCII characters.
     *
     * @example abcF123x
     *
     * @var string
     */
    public $sharePwd;

    /**
     * @description The user ID.
     *
     * @example u123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'creatable'           => 'creatable',
        'creatableFileIdList' => 'creatable_file_id_list',
        'description'         => 'description',
        'disableDownload'     => 'disable_download',
        'disablePreview'      => 'disable_preview',
        'disableSave'         => 'disable_save',
        'downloadLimit'       => 'download_limit',
        'driveId'             => 'drive_id',
        'expiration'          => 'expiration',
        'fileIdList'          => 'file_id_list',
        'previewLimit'        => 'preview_limit',
        'saveLimit'           => 'save_limit',
        'shareAllFiles'       => 'share_all_files',
        'shareName'           => 'share_name',
        'sharePwd'            => 'share_pwd',
        'userId'              => 'user_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatable) {
            $res['creatable'] = $this->creatable;
        }
        if (null !== $this->creatableFileIdList) {
            $res['creatable_file_id_list'] = $this->creatableFileIdList;
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
        if (null !== $this->downloadLimit) {
            $res['download_limit'] = $this->downloadLimit;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }
        if (null !== $this->fileIdList) {
            $res['file_id_list'] = $this->fileIdList;
        }
        if (null !== $this->previewLimit) {
            $res['preview_limit'] = $this->previewLimit;
        }
        if (null !== $this->saveLimit) {
            $res['save_limit'] = $this->saveLimit;
        }
        if (null !== $this->shareAllFiles) {
            $res['share_all_files'] = $this->shareAllFiles;
        }
        if (null !== $this->shareName) {
            $res['share_name'] = $this->shareName;
        }
        if (null !== $this->sharePwd) {
            $res['share_pwd'] = $this->sharePwd;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateShareLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatable'])) {
            $model->creatable = $map['creatable'];
        }
        if (isset($map['creatable_file_id_list'])) {
            if (!empty($map['creatable_file_id_list'])) {
                $model->creatableFileIdList = $map['creatable_file_id_list'];
            }
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
        if (isset($map['download_limit'])) {
            $model->downloadLimit = $map['download_limit'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }
        if (isset($map['file_id_list'])) {
            if (!empty($map['file_id_list'])) {
                $model->fileIdList = $map['file_id_list'];
            }
        }
        if (isset($map['preview_limit'])) {
            $model->previewLimit = $map['preview_limit'];
        }
        if (isset($map['save_limit'])) {
            $model->saveLimit = $map['save_limit'];
        }
        if (isset($map['share_all_files'])) {
            $model->shareAllFiles = $map['share_all_files'];
        }
        if (isset($map['share_name'])) {
            $model->shareName = $map['share_name'];
        }
        if (isset($map['share_pwd'])) {
            $model->sharePwd = $map['share_pwd'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
