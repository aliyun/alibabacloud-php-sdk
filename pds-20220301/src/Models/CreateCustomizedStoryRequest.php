<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateCustomizedStoryRequest\storyCover;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateCustomizedStoryRequest\storyFiles;

class CreateCustomizedStoryRequest extends Model
{
    /**
     * @var string[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var storyCover
     */
    public $storyCover;

    /**
     * @var storyFiles[]
     */
    public $storyFiles;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var string
     */
    public $storySubType;

    /**
     * @var string
     */
    public $storyType;
    protected $_name = [
        'customLabels' => 'custom_labels',
        'driveId' => 'drive_id',
        'storyCover' => 'story_cover',
        'storyFiles' => 'story_files',
        'storyName' => 'story_name',
        'storySubType' => 'story_sub_type',
        'storyType' => 'story_type',
    ];

    public function validate()
    {
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        if (null !== $this->storyCover) {
            $this->storyCover->validate();
        }
        if (\is_array($this->storyFiles)) {
            Model::validateArray($this->storyFiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->storyCover) {
            $res['story_cover'] = null !== $this->storyCover ? $this->storyCover->toArray($noStream) : $this->storyCover;
        }

        if (null !== $this->storyFiles) {
            if (\is_array($this->storyFiles)) {
                $res['story_files'] = [];
                $n1 = 0;
                foreach ($this->storyFiles as $item1) {
                    $res['story_files'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->storyName) {
            $res['story_name'] = $this->storyName;
        }

        if (null !== $this->storySubType) {
            $res['story_sub_type'] = $this->storySubType;
        }

        if (null !== $this->storyType) {
            $res['story_type'] = $this->storyType;
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

        if (isset($map['story_cover'])) {
            $model->storyCover = storyCover::fromMap($map['story_cover']);
        }

        if (isset($map['story_files'])) {
            if (!empty($map['story_files'])) {
                $model->storyFiles = [];
                $n1 = 0;
                foreach ($map['story_files'] as $item1) {
                    $model->storyFiles[$n1++] = storyFiles::fromMap($item1);
                }
            }
        }

        if (isset($map['story_name'])) {
            $model->storyName = $map['story_name'];
        }

        if (isset($map['story_sub_type'])) {
            $model->storySubType = $map['story_sub_type'];
        }

        if (isset($map['story_type'])) {
            $model->storyType = $map['story_type'];
        }

        return $model;
    }
}
