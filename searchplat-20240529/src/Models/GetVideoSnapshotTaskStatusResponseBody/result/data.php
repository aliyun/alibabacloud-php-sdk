<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetVideoSnapshotTaskStatusResponseBody\result;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $frameIndex;

    /**
     * @var float
     */
    public $frameTime;

    /**
     * @var string
     */
    public $path;
    protected $_name = [
        'frameIndex' => 'frame_index',
        'frameTime' => 'frame_time',
        'path' => 'path',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frameIndex) {
            $res['frame_index'] = $this->frameIndex;
        }

        if (null !== $this->frameTime) {
            $res['frame_time'] = $this->frameTime;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
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
        if (isset($map['frame_index'])) {
            $model->frameIndex = $map['frame_index'];
        }

        if (isset($map['frame_time'])) {
            $model->frameTime = $map['frame_time'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        return $model;
    }
}
