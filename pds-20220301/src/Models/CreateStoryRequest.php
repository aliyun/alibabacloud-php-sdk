<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CreateStoryRequest extends Model
{
    /**
     * @var Address
     */
    public $address;

    /**
     * @var string[]
     */
    public $customLabels;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var int
     */
    public $maxImageCount;

    /**
     * @var int
     */
    public $minImageCount;

    /**
     * @var string
     */
    public $storyEndTime;

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
    protected $_name = [
        'address' => 'address',
        'customLabels' => 'custom_labels',
        'driveId' => 'drive_id',
        'maxImageCount' => 'max_image_count',
        'minImageCount' => 'min_image_count',
        'storyEndTime' => 'story_end_time',
        'storyId' => 'story_id',
        'storyName' => 'story_name',
        'storyStartTime' => 'story_start_time',
        'storySubType' => 'story_sub_type',
        'storyType' => 'story_type',
    ];

    public function validate()
    {
        if (null !== $this->address) {
            $this->address->validate();
        }
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = null !== $this->address ? $this->address->toArray($noStream) : $this->address;
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

        if (null !== $this->maxImageCount) {
            $res['max_image_count'] = $this->maxImageCount;
        }

        if (null !== $this->minImageCount) {
            $res['min_image_count'] = $this->minImageCount;
        }

        if (null !== $this->storyEndTime) {
            $res['story_end_time'] = $this->storyEndTime;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = Address::fromMap($map['address']);
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

        if (isset($map['max_image_count'])) {
            $model->maxImageCount = $map['max_image_count'];
        }

        if (isset($map['min_image_count'])) {
            $model->minImageCount = $map['min_image_count'];
        }

        if (isset($map['story_end_time'])) {
            $model->storyEndTime = $map['story_end_time'];
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

        return $model;
    }
}
