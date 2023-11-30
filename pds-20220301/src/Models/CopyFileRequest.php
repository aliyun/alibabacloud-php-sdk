<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CopyFileRequest extends Model
{
    /**
     * @description Specifies whether to automatically rename the file if the file name already exists in the destination folder. Default value: false.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRename;

    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The file ID or folder ID.
     *
     * @example 4221bf6e6ab43c255edc4463bf3a6f5f5d317406
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The share ID. If you want to manage a file by using a share link, carry the `x-share-token` header for authentication in the request and specify share_id. In this case, `drive_id` is invalid. Otherwise, use an `AccessKey pair` or `access token` for authentication and specify `drive_id`. You must specify one of `share_id` and `drive_id`.
     *
     * @example 7JQX1FswpQ8
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The ID of the drive to which you want to copy the file or folder. Default value: the value of drive_id.
     *
     * @example 1
     *
     * @var string
     */
    public $toDriveId;

    /**
     * @description The ID of the destination parent folder. If you want to copy the file or folder to a root directory, set this parameter to root.
     *
     * @example 6520943DC261
     *
     * @var string
     */
    public $toParentFileId;
    protected $_name = [
        'autoRename'     => 'auto_rename',
        'driveId'        => 'drive_id',
        'fileId'         => 'file_id',
        'shareId'        => 'share_id',
        'toDriveId'      => 'to_drive_id',
        'toParentFileId' => 'to_parent_file_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRename) {
            $res['auto_rename'] = $this->autoRename;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }
        if (null !== $this->shareId) {
            $res['share_id'] = $this->shareId;
        }
        if (null !== $this->toDriveId) {
            $res['to_drive_id'] = $this->toDriveId;
        }
        if (null !== $this->toParentFileId) {
            $res['to_parent_file_id'] = $this->toParentFileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auto_rename'])) {
            $model->autoRename = $map['auto_rename'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }
        if (isset($map['share_id'])) {
            $model->shareId = $map['share_id'];
        }
        if (isset($map['to_drive_id'])) {
            $model->toDriveId = $map['to_drive_id'];
        }
        if (isset($map['to_parent_file_id'])) {
            $model->toParentFileId = $map['to_parent_file_id'];
        }

        return $model;
    }
}
