<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData\aiLabelInfo\occurrences;

use AlibabaCloud\Tea\Model;

class tracks extends Model
{
    /**
     * @description The coordinates of the bounding box.
     *
     * @example 468.0;67.0;615.0;267.0
     *
     * @var string
     */
    public $position;

    /**
     * @description The size of the bounding box.
     *
     * @example 50.2
     *
     * @var float
     */
    public $size;

    /**
     * @description The timestamp of the track.
     *
     * @example 1.4
     *
     * @var float
     */
    public $timestamp;
    protected $_name = [
        'position' => 'Position',
        'size' => 'Size',
        'timestamp' => 'Timestamp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tracks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
