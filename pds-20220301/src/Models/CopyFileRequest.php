<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CopyFileRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRename;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $shareId;

    /**
     * @var string
     */
    public $toDriveId;

    /**
     * @var string
     */
    public $toParentFileId;
    protected $_name = [
        'autoRename' => 'auto_rename',
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'shareId' => 'share_id',
        'toDriveId' => 'to_drive_id',
        'toParentFileId' => 'to_parent_file_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
