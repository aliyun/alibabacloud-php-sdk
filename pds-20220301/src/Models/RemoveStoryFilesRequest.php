<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\RemoveStoryFilesRequest\files;

class RemoveStoryFilesRequest extends Model
{
    /**
     * @var string
     */
    public $driveId;

    /**
     * @var files[]
     */
    public $files;

    /**
     * @var string
     */
    public $storyId;
    protected $_name = [
        'driveId' => 'drive_id',
        'files' => 'files',
        'storyId' => 'story_id',
    ];

    public function validate()
    {
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['files'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->storyId) {
            $res['story_id'] = $this->storyId;
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
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }

        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['files'] as $item1) {
                    $model->files[$n1++] = files::fromMap($item1);
                }
            }
        }

        if (isset($map['story_id'])) {
            $model->storyId = $map['story_id'];
        }

        return $model;
    }
}
