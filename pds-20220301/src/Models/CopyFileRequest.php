<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CopyFileRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $autoRename;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 4221bf6e6ab43c255edc4463bf3a6f5f5d317406
     *
     * @var string
     */
    public $fileId;

    /**
     * @example 6520943DC261
     *
     * @var string
     */
    public $toParentFileId;
    protected $_name = [
        'autoRename'     => 'auto_rename',
        'driveId'        => 'drive_id',
        'fileId'         => 'file_id',
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
        if (isset($map['to_parent_file_id'])) {
            $model->toParentFileId = $map['to_parent_file_id'];
        }

        return $model;
    }
}
