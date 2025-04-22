<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchStoriesRequest\createTimeRange;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchStoriesRequest\storyEndTimeRange;
use AlibabaCloud\SDK\Pds\V20220301\Models\SearchStoriesRequest\storyStartTimeRange;

class SearchStoriesRequest extends Model
{
    /**
     * @var string
     */
    public $coverImageThumbnailProcess;

    /**
     * @var string
     */
    public $coverVideoThumbnailProcess;

    /**
     * @var createTimeRange
     */
    public $createTimeRange;

    /**
     * @var string
     */
    public $customLabels;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string[]
     */
    public $faceGroupIds;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var storyEndTimeRange
     */
    public $storyEndTimeRange;

    /**
     * @var string
     */
    public $storyId;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var storyStartTimeRange
     */
    public $storyStartTimeRange;

    /**
     * @var string
     */
    public $storyType;

    /**
     * @var int
     */
    public $urlExpireSec;

    /**
     * @var bool
     */
    public $withEmptyStories;
    protected $_name = [
        'coverImageThumbnailProcess' => 'cover_image_thumbnail_process',
        'coverVideoThumbnailProcess' => 'cover_video_thumbnail_process',
        'createTimeRange' => 'create_time_range',
        'customLabels' => 'custom_labels',
        'driveId' => 'drive_id',
        'faceGroupIds' => 'face_group_ids',
        'limit' => 'limit',
        'marker' => 'marker',
        'order' => 'order',
        'sort' => 'sort',
        'storyEndTimeRange' => 'story_end_time_range',
        'storyId' => 'story_id',
        'storyName' => 'story_name',
        'storyStartTimeRange' => 'story_start_time_range',
        'storyType' => 'story_type',
        'urlExpireSec' => 'url_expire_sec',
        'withEmptyStories' => 'with_empty_stories',
    ];

    public function validate()
    {
        if (null !== $this->createTimeRange) {
            $this->createTimeRange->validate();
        }
        if (\is_array($this->faceGroupIds)) {
            Model::validateArray($this->faceGroupIds);
        }
        if (null !== $this->storyEndTimeRange) {
            $this->storyEndTimeRange->validate();
        }
        if (null !== $this->storyStartTimeRange) {
            $this->storyStartTimeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverImageThumbnailProcess) {
            $res['cover_image_thumbnail_process'] = $this->coverImageThumbnailProcess;
        }

        if (null !== $this->coverVideoThumbnailProcess) {
            $res['cover_video_thumbnail_process'] = $this->coverVideoThumbnailProcess;
        }

        if (null !== $this->createTimeRange) {
            $res['create_time_range'] = null !== $this->createTimeRange ? $this->createTimeRange->toArray($noStream) : $this->createTimeRange;
        }

        if (null !== $this->customLabels) {
            $res['custom_labels'] = $this->customLabels;
        }

        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->faceGroupIds) {
            if (\is_array($this->faceGroupIds)) {
                $res['face_group_ids'] = [];
                $n1 = 0;
                foreach ($this->faceGroupIds as $item1) {
                    $res['face_group_ids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->storyEndTimeRange) {
            $res['story_end_time_range'] = null !== $this->storyEndTimeRange ? $this->storyEndTimeRange->toArray($noStream) : $this->storyEndTimeRange;
        }

        if (null !== $this->storyId) {
            $res['story_id'] = $this->storyId;
        }

        if (null !== $this->storyName) {
            $res['story_name'] = $this->storyName;
        }

        if (null !== $this->storyStartTimeRange) {
            $res['story_start_time_range'] = null !== $this->storyStartTimeRange ? $this->storyStartTimeRange->toArray($noStream) : $this->storyStartTimeRange;
        }

        if (null !== $this->storyType) {
            $res['story_type'] = $this->storyType;
        }

        if (null !== $this->urlExpireSec) {
            $res['url_expire_sec'] = $this->urlExpireSec;
        }

        if (null !== $this->withEmptyStories) {
            $res['with_empty_stories'] = $this->withEmptyStories;
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
        if (isset($map['cover_image_thumbnail_process'])) {
            $model->coverImageThumbnailProcess = $map['cover_image_thumbnail_process'];
        }

        if (isset($map['cover_video_thumbnail_process'])) {
            $model->coverVideoThumbnailProcess = $map['cover_video_thumbnail_process'];
        }

        if (isset($map['create_time_range'])) {
            $model->createTimeRange = createTimeRange::fromMap($map['create_time_range']);
        }

        if (isset($map['custom_labels'])) {
            $model->customLabels = $map['custom_labels'];
        }

        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['face_group_ids'])) {
            if (!empty($map['face_group_ids'])) {
                $model->faceGroupIds = [];
                $n1 = 0;
                foreach ($map['face_group_ids'] as $item1) {
                    $model->faceGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['story_end_time_range'])) {
            $model->storyEndTimeRange = storyEndTimeRange::fromMap($map['story_end_time_range']);
        }

        if (isset($map['story_id'])) {
            $model->storyId = $map['story_id'];
        }

        if (isset($map['story_name'])) {
            $model->storyName = $map['story_name'];
        }

        if (isset($map['story_start_time_range'])) {
            $model->storyStartTimeRange = storyStartTimeRange::fromMap($map['story_start_time_range']);
        }

        if (isset($map['story_type'])) {
            $model->storyType = $map['story_type'];
        }

        if (isset($map['url_expire_sec'])) {
            $model->urlExpireSec = $map['url_expire_sec'];
        }

        if (isset($map['with_empty_stories'])) {
            $model->withEmptyStories = $map['with_empty_stories'];
        }

        return $model;
    }
}
