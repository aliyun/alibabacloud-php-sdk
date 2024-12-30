<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class AddStoryFilesResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $driveId;

    /**
     * @var AddStoryFile[]
     */
    public $files;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @example 9132e0d8-fe92-4e56-86c3-f5f112308003
     *
     * @var string
     */
    public $storyId;
    protected $_name = [
        'driveId'   => 'drive_id',
        'files'     => 'files',
        'requestId' => 'request_id',
        'storyId'   => 'story_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['drive_id'] = $this->driveId;
        }
        if (null !== $this->files) {
            $res['files'] = [];
            if (null !== $this->files && \is_array($this->files)) {
                $n = 0;
                foreach ($this->files as $item) {
                    $res['files'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['request_id'] = $this->requestId;
        }
        if (null !== $this->storyId) {
            $res['story_id'] = $this->storyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddStoryFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drive_id'])) {
            $model->driveId = $map['drive_id'];
        }
        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n            = 0;
                foreach ($map['files'] as $item) {
                    $model->files[$n++] = null !== $item ? AddStoryFile::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['request_id'])) {
            $model->requestId = $map['request_id'];
        }
        if (isset($map['story_id'])) {
            $model->storyId = $map['story_id'];
        }

        return $model;
    }
}
