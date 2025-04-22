<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class UpdateFacegroupRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $groupCoverFaceId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $remarks;
    protected $_name = [
        'driveId' => 'drive_id',
        'groupCoverFaceId' => 'group_cover_face_id',
        'groupId' => 'group_id',
        'groupName' => 'group_name',
        'remarks' => 'remarks',
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

        if (null !== $this->groupCoverFaceId) {
            $res['group_cover_face_id'] = $this->groupCoverFaceId;
        }

        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }

        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
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

        if (isset($map['group_cover_face_id'])) {
            $model->groupCoverFaceId = $map['group_cover_face_id'];
        }

        if (isset($map['group_id'])) {
            $model->groupId = $map['group_id'];
        }

        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
        }

        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }

        return $model;
    }
}
