<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class UpdateFacegroupRequest extends Model
{
    /**
     * @description The drive ID.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The face ID of the thumbnail of the face-based group. You can obtain the face ID from the **image_media_metadata** parameter in the returned results of the GetFile, ListFile, or SearchFile operation.
     *
     * @example face1
     *
     * @var string
     */
    public $groupCoverFaceId;

    /**
     * @description The ID of the face-based group. You can call the ListFacegroups operation to query the group ID.
     *
     * @example group-abc
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the face-based group. The name can be up to 128 characters in length.
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The remarks. The remarks can be up to 128 characters in length.
     *
     * @var string
     */
    public $remarks;
    protected $_name = [
        'driveId'          => 'drive_id',
        'groupCoverFaceId' => 'group_cover_face_id',
        'groupId'          => 'group_id',
        'groupName'        => 'group_name',
        'remarks'          => 'remarks',
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

    /**
     * @param array $map
     *
     * @return UpdateFacegroupRequest
     */
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
