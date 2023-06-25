<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class Story extends Model
{
    /**
     * @var string
     */
    public $coverFileId;

    /**
     * @var string
     */
    public $coverFileThumbnailUrl;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @var string[]
     */
    public $faceGroupIds;

    /**
     * @var string
     */
    public $storyEndTime;

    /**
     * @var File[]
     */
    public $storyFileList;

    /**
     * @var string
     */
    public $storyId;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var string
     */
    public $storyStartTime;

    /**
     * @var string
     */
    public $storySubType;

    /**
     * @var string
     */
    public $storyType;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'coverFileId'           => 'cover_file_id',
        'coverFileThumbnailUrl' => 'cover_file_thumbnail_url',
        'createdAt'             => 'created_at',
        'customLabels'          => 'custom_labels',
        'faceGroupIds'          => 'face_group_ids',
        'storyEndTime'          => 'story_end_time',
        'storyFileList'         => 'story_file_list',
        'storyId'               => 'story_id',
        'storyName'             => 'story_name',
        'storyStartTime'        => 'story_start_time',
        'storySubType'          => 'story_sub_type',
        'storyType'             => 'story_type',
        'updatedAt'             => 'updated_at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverFileId) {
            $res['cover_file_id'] = $this->coverFileId;
        }
        if (null !== $this->coverFileThumbnailUrl) {
            $res['cover_file_thumbnail_url'] = $this->coverFileThumbnailUrl;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->customLabels) {
            $res['custom_labels'] = $this->customLabels;
        }
        if (null !== $this->faceGroupIds) {
            $res['face_group_ids'] = $this->faceGroupIds;
        }
        if (null !== $this->storyEndTime) {
            $res['story_end_time'] = $this->storyEndTime;
        }
        if (null !== $this->storyFileList) {
            $res['story_file_list'] = [];
            if (null !== $this->storyFileList && \is_array($this->storyFileList)) {
                $n = 0;
                foreach ($this->storyFileList as $item) {
                    $res['story_file_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storyId) {
            $res['story_id'] = $this->storyId;
        }
        if (null !== $this->storyName) {
            $res['story_name'] = $this->storyName;
        }
        if (null !== $this->storyStartTime) {
            $res['story_start_time'] = $this->storyStartTime;
        }
        if (null !== $this->storySubType) {
            $res['story_sub_type'] = $this->storySubType;
        }
        if (null !== $this->storyType) {
            $res['story_type'] = $this->storyType;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Story
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cover_file_id'])) {
            $model->coverFileId = $map['cover_file_id'];
        }
        if (isset($map['cover_file_thumbnail_url'])) {
            $model->coverFileThumbnailUrl = $map['cover_file_thumbnail_url'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['custom_labels'])) {
            $model->customLabels = $map['custom_labels'];
        }
        if (isset($map['face_group_ids'])) {
            if (!empty($map['face_group_ids'])) {
                $model->faceGroupIds = $map['face_group_ids'];
            }
        }
        if (isset($map['story_end_time'])) {
            $model->storyEndTime = $map['story_end_time'];
        }
        if (isset($map['story_file_list'])) {
            if (!empty($map['story_file_list'])) {
                $model->storyFileList = [];
                $n                    = 0;
                foreach ($map['story_file_list'] as $item) {
                    $model->storyFileList[$n++] = null !== $item ? File::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['story_id'])) {
            $model->storyId = $map['story_id'];
        }
        if (isset($map['story_name'])) {
            $model->storyName = $map['story_name'];
        }
        if (isset($map['story_start_time'])) {
            $model->storyStartTime = $map['story_start_time'];
        }
        if (isset($map['story_sub_type'])) {
            $model->storySubType = $map['story_sub_type'];
        }
        if (isset($map['story_type'])) {
            $model->storyType = $map['story_type'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }

        return $model;
    }
}
