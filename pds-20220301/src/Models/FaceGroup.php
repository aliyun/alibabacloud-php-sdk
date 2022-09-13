<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\FaceGroup\groupCoverFaceBoundary;
use AlibabaCloud\Tea\Model;

class FaceGroup extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var groupCoverFaceBoundary
     */
    public $groupCoverFaceBoundary;

    /**
     * @var string
     */
    public $groupCoverFileId;

    /**
     * @var int
     */
    public $groupCoverHeight;

    /**
     * @var string
     */
    public $groupCoverUrl;

    /**
     * @var int
     */
    public $groupCoverWidth;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt'              => 'created_at',
        'groupCoverFaceBoundary' => 'group_cover_face_boundary',
        'groupCoverFileId'       => 'group_cover_file_id',
        'groupCoverHeight'       => 'group_cover_height',
        'groupCoverUrl'          => 'group_cover_url',
        'groupCoverWidth'        => 'group_cover_width',
        'groupId'                => 'group_id',
        'groupName'              => 'group_name',
        'imageCount'             => 'image_count',
        'remarks'                => 'remarks',
        'updatedAt'              => 'updated_at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->groupCoverFaceBoundary) {
            $res['group_cover_face_boundary'] = null !== $this->groupCoverFaceBoundary ? $this->groupCoverFaceBoundary->toMap() : null;
        }
        if (null !== $this->groupCoverFileId) {
            $res['group_cover_file_id'] = $this->groupCoverFileId;
        }
        if (null !== $this->groupCoverHeight) {
            $res['group_cover_height'] = $this->groupCoverHeight;
        }
        if (null !== $this->groupCoverUrl) {
            $res['group_cover_url'] = $this->groupCoverUrl;
        }
        if (null !== $this->groupCoverWidth) {
            $res['group_cover_width'] = $this->groupCoverWidth;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->imageCount) {
            $res['image_count'] = $this->imageCount;
        }
        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FaceGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['group_cover_face_boundary'])) {
            $model->groupCoverFaceBoundary = groupCoverFaceBoundary::fromMap($map['group_cover_face_boundary']);
        }
        if (isset($map['group_cover_file_id'])) {
            $model->groupCoverFileId = $map['group_cover_file_id'];
        }
        if (isset($map['group_cover_height'])) {
            $model->groupCoverHeight = $map['group_cover_height'];
        }
        if (isset($map['group_cover_url'])) {
            $model->groupCoverUrl = $map['group_cover_url'];
        }
        if (isset($map['group_cover_width'])) {
            $model->groupCoverWidth = $map['group_cover_width'];
        }
        if (isset($map['group_id'])) {
            $model->groupId = $map['group_id'];
        }
        if (isset($map['group_name'])) {
            $model->groupName = $map['group_name'];
        }
        if (isset($map['image_count'])) {
            $model->imageCount = $map['image_count'];
        }
        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
