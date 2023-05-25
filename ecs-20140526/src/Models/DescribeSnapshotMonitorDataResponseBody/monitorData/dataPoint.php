<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class dataPoint extends Model
{
    /**
     * @description The snapshot size. Unit: bytes.
     *
     * @example 243036848128
     *
     * @var int
     */
    public $size;

    /**
     * @description The timestamp that corresponds to the snapshot size.
     *
     * @example 2019-05-10T04:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'size'      => 'Size',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
