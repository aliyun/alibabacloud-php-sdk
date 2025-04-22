<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class RemoveFaceGroupFileRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $faceGroupId;

    /**
     * @var string
     */
    public $fileId;
    protected $_name = [
        'driveId' => 'drive_id',
        'faceGroupId' => 'face_group_id',
        'fileId' => 'file_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
