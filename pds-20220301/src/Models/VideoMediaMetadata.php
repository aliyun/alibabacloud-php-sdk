<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class VideoMediaMetadata extends Model
{
    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $takenAt;
    protected $_name = [
        'duration' => 'duration',
        'takenAt'  => 'taken_at',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->takenAt) {
            $res['taken_at'] = $this->takenAt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoMediaMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['taken_at'])) {
            $model->takenAt = $map['taken_at'];
        }

        return $model;
    }
}
