<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class CreateStoryRequest extends Model
{
    /**
     * @var Address
     */
    public $address;

    /**
     * @deprecated
     *
     * @var string[]
     */
    public $customLabels;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @example 30
     *
     * @var int
     */
    public $maxImageCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $minImageCount;

    /**
     * @example 2022-12-30T16:00:00Z
     *
     * @var string
     */
    public $storyEndTime;

    /**
     * @example 9132e0d8-fe92-4e56-86c3-f5f112308003
     *
     * @var string
     */
    public $storyId;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @example 2016-12-30T16:00:00Z
     *
     * @var string
     */
    public $storyStartTime;

    /**
     * @example Food
     *
     * @var string
     */
    public $storySubType;

    /**
     * @description This parameter is required.
     *
     * @example TagMemory
     *
     * @var string
     */
    public $storyType;
    protected $_name = [
        'address'        => 'address',
        'customLabels'   => 'custom_labels',
        'driveId'        => 'drive_id',
        'maxImageCount'  => 'max_image_count',
        'minImageCount'  => 'min_image_count',
        'storyEndTime'   => 'story_end_time',
        'storyId'        => 'story_id',
        'storyName'      => 'story_name',
        'storyStartTime' => 'story_start_time',
        'storySubType'   => 'story_sub_type',
        'storyType'      => 'story_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->customLabels) {
            $res['custom_labels'] = $this->customLabels;
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

    /**
     * @param array $map
     *
     * @return CreateStoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = Address::fromMap($map['address']);
        }
        if (isset($map['custom_labels'])) {
            $model->customLabels = $map['custom_labels'];
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
