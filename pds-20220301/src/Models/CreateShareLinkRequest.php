<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateShareLinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

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
     * @example 100
     *
     * @var int
     */
    public $downloadLimit;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 2020-06-28T11:33:00.000+08:00
     *
     * @var string
     */
    public $expiration;

    /**
     * @example ["520b217f13adf4fc24f2191991b1664ce045b393"]
     *
     * @var string[]
     */
    public $fileIdList;

    /**
     * @var bool
     */
    public $officeEditable;

    /**
     * @example 100
     *
     * @var int
     */
    public $previewLimit;

    /**
     * @example 100
     *
     * @var int
     */
    public $saveLimit;

    /**
     * @example true
     *
     * @var bool
     */
    public $shareAllFiles;

    /**
     * @var string
     */
    public $shareName;

    /**
     * @example abcF123x
     *
     * @var string
     */
    public $sharePwd;

    /**
     * @example u123
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'description'     => 'description',
        'disableDownload' => 'disable_download',
        'disablePreview'  => 'disable_preview',
        'disableSave'     => 'disable_save',
        'downloadLimit'   => 'download_limit',
        'driveId'         => 'drive_id',
        'expiration'      => 'expiration',
        'fileIdList'      => 'file_id_list',
        'officeEditable'  => 'office_editable',
        'previewLimit'    => 'preview_limit',
        'saveLimit'       => 'save_limit',
        'shareAllFiles'   => 'share_all_files',
        'shareName'       => 'share_name',
        'sharePwd'        => 'share_pwd',
        'userId'          => 'user_id',
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
        if (null !== $this->officeEditable) {
            $res['office_editable'] = $this->officeEditable;
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
        if (isset($map['office_editable'])) {
            $model->officeEditable = $map['office_editable'];
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
