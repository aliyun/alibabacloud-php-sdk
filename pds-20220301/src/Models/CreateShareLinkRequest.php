<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string[]
     */
    public $fileIdList;

    /**
     * @var bool
     */
    public $officeEditable;

    /**
     * @var int
     */
    public $previewLimit;

    /**
     * @var bool
     */
    public $requireLogin;

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
    public $shareName;

    /**
     * @var string
     */
    public $sharePwd;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'creatable' => 'creatable',
        'creatableFileIdList' => 'creatable_file_id_list',
        'description' => 'description',
        'disableDownload' => 'disable_download',
        'disablePreview' => 'disable_preview',
        'disableSave' => 'disable_save',
        'downloadLimit' => 'download_limit',
        'driveId' => 'drive_id',
        'expiration' => 'expiration',
        'fileIdList' => 'file_id_list',
        'officeEditable' => 'office_editable',
        'previewLimit' => 'preview_limit',
        'requireLogin' => 'require_login',
        'saveLimit' => 'save_limit',
        'shareAllFiles' => 'share_all_files',
        'shareName' => 'share_name',
        'sharePwd' => 'share_pwd',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->creatableFileIdList)) {
            Model::validateArray($this->creatableFileIdList);
        }
        if (\is_array($this->fileIdList)) {
            Model::validateArray($this->fileIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatable) {
            $res['creatable'] = $this->creatable;
        }

        if (null !== $this->creatableFileIdList) {
            if (\is_array($this->creatableFileIdList)) {
                $res['creatable_file_id_list'] = [];
                $n1 = 0;
                foreach ($this->creatableFileIdList as $item1) {
                    $res['creatable_file_id_list'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->fileIdList)) {
                $res['file_id_list'] = [];
                $n1 = 0;
                foreach ($this->fileIdList as $item1) {
                    $res['file_id_list'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->officeEditable) {
            $res['office_editable'] = $this->officeEditable;
        }

        if (null !== $this->previewLimit) {
            $res['preview_limit'] = $this->previewLimit;
        }

        if (null !== $this->requireLogin) {
            $res['require_login'] = $this->requireLogin;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatable'])) {
            $model->creatable = $map['creatable'];
        }

        if (isset($map['creatable_file_id_list'])) {
            if (!empty($map['creatable_file_id_list'])) {
                $model->creatableFileIdList = [];
                $n1 = 0;
                foreach ($map['creatable_file_id_list'] as $item1) {
                    $model->creatableFileIdList[$n1++] = $item1;
                }
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
                $model->fileIdList = [];
                $n1 = 0;
                foreach ($map['file_id_list'] as $item1) {
                    $model->fileIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['office_editable'])) {
            $model->officeEditable = $map['office_editable'];
        }

        if (isset($map['preview_limit'])) {
            $model->previewLimit = $map['preview_limit'];
        }

        if (isset($map['require_login'])) {
            $model->requireLogin = $map['require_login'];
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
