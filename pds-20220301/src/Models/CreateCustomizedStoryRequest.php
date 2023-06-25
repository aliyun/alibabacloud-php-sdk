<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\CreateCustomizedStoryRequest\storyCover;
use AlibabaCloud\SDK\Pds\V20220301\Models\CreateCustomizedStoryRequest\storyFiles;
use AlibabaCloud\Tea\Model;

class CreateCustomizedStoryRequest extends Model
{
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
     * @var storyCover
     */
    public $storyCover;

    /**
     * @var storyFiles[]
     */
    public $storyFiles;

    /**
     * @example test_name
     *
     * @var string
     */
    public $storyName;

    /**
     * @example user_created
     *
     * @var string
     */
    public $storySubType;

    /**
     * @example user_created
     *
     * @var string
     */
    public $storyType;
    protected $_name = [
        'customLabels' => 'custom_labels',
        'driveId'      => 'drive_id',
        'storyCover'   => 'story_cover',
        'storyFiles'   => 'story_files',
        'storyName'    => 'story_name',
        'storySubType' => 'story_sub_type',
        'storyType'    => 'story_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customLabels) {
            $res['custom_labels'] = $this->customLabels;
        }
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->storyCover) {
            $res['story_cover'] = null !== $this->storyCover ? $this->storyCover->toMap() : null;
        }
        if (null !== $this->storyFiles) {
            $res['story_files'] = [];
            if (null !== $this->storyFiles && \is_array($this->storyFiles)) {
                $n = 0;
                foreach ($this->storyFiles as $item) {
                    $res['story_files'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateCustomizedStoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['custom_labels'])) {
            $model->customLabels = $map['custom_labels'];
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
                $n                 = 0;
                foreach ($map['story_files'] as $item) {
                    $model->storyFiles[$n++] = null !== $item ? storyFiles::fromMap($item) : $item;
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
