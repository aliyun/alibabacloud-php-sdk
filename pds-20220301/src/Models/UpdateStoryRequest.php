<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateStoryRequest\cover;
use AlibabaCloud\Tea\Model;

class UpdateStoryRequest extends Model
{
    /**
     * @var cover
     */
    public $cover;

    /**
     * @deprecated
     *
     * @var string[]
     */
    public $customLabels;

    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 9132e0d8-fe92-4e56-86c3-f5f112308003
     *
     * @var string
     */
    public $storyId;

    /**
     * @example name1
     *
     * @var string
     */
    public $storyName;
    protected $_name = [
        'cover'        => 'cover',
        'customLabels' => 'custom_labels',
        'driveId'      => 'drive_id',
        'storyId'      => 'story_id',
        'storyName'    => 'story_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cover) {
            $res['cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->customLabels) {
            $res['custom_labels'] = $this->customLabels;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->storyId) {
            $res['story_id'] = $this->storyId;
        }
        if (null !== $this->storyName) {
            $res['story_name'] = $this->storyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cover'])) {
            $model->cover = cover::fromMap($map['cover']);
        }
        if (isset($map['custom_labels'])) {
            $model->customLabels = $map['custom_labels'];
        }
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['story_id'])) {
            $model->storyId = $map['story_id'];
        }
        if (isset($map['story_name'])) {
            $model->storyName = $map['story_name'];
        }

        return $model;
    }
}
