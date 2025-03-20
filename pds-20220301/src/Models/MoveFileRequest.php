<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class MoveFileRequest extends Model
{
    /**
     * @description The processing method that is used if the file that you want to move has the same name as an existing file in the destination directory. Valid values:
     *
     * ignore: allows you to move the file by using the same name as an existing file in the destination directory.
     *
     * auto_rename: automatically renames the file that has the same name exists in the destination directory. By default, the current point in time is added to the end of the file name. Example: xxx_20060102_150405.
     *
     * refuse: does not move the file that you want to move but returns the information about the file that has the same name in the destination directory.
     *
     * Default value: ignore.
     *
     * @example ignore
     *
     * @var string
     */
    public $checkNameMode;

    /**
     * @description The drive ID.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The file ID.
     *
     * This parameter is required.
     *
     * @example 9520943DC264
     *
     * @var string
     */
    public $fileId;

    /**
     * @description The ID of the destination parent directory to which you want to move a file or folder. If you want to move a file or folder to the root directory, set this parameter to root.
     *
     * This parameter is required.
     *
     * @example 6520943DC261
     *
     * @var string
     */
    public $toParentFileId;
    protected $_name = [
        'checkNameMode' => 'check_name_mode',
        'driveId' => 'drive_id',
        'fileId' => 'file_id',
        'toParentFileId' => 'to_parent_file_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkNameMode) {
            $res['check_name_mode'] = $this->checkNameMode;
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
     * @return MoveFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['check_name_mode'])) {
            $model->checkNameMode = $map['check_name_mode'];
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
