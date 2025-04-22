<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\UpdateStoryRequest\cover;

class UpdateStoryRequest extends Model
{
    /**
     * @var cover
     */
    public $cover;

    /**
     * @var string[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $storyId;

    /**
     * @var string
     */
    public $storyName;
    protected $_name = [
        'cover' => 'cover',
        'customLabels' => 'custom_labels',
        'driveId' => 'drive_id',
        'storyId' => 'story_id',
        'storyName' => 'story_name',
    ];

    public function validate()
    {
        if (null !== $this->cover) {
            $this->cover->validate();
        }
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cover) {
            $res['cover'] = null !== $this->cover ? $this->cover->toArray($noStream) : $this->cover;
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['custom_labels'] = [];
                foreach ($this->customLabels as $key1 => $value1) {
                    $res['custom_labels'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cover'])) {
            $model->cover = cover::fromMap($map['cover']);
        }

        if (isset($map['custom_labels'])) {
            if (!empty($map['custom_labels'])) {
                $model->customLabels = [];
                foreach ($map['custom_labels'] as $key1 => $value1) {
                    $model->customLabels[$key1] = $value1;
                }
            }
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
