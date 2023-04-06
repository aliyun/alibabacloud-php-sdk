<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class RemoveFaceGroupFileRequest extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $faceGroupId;

    /**
     * @example abcd
     *
     * @var string
     */
    public $fileId;
    protected $_name = [
        'driveId'     => 'drive_id',
        'faceGroupId' => 'face_group_id',
        'fileId'      => 'file_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->faceGroupId) {
            $res['face_group_id'] = $this->faceGroupId;
        }
        if (null !== $this->fileId) {
            $res['file_id'] = $this->fileId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveFaceGroupFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['face_group_id'])) {
            $model->faceGroupId = $map['face_group_id'];
        }
        if (isset($map['file_id'])) {
            $model->fileId = $map['file_id'];
        }

        return $model;
    }
}
