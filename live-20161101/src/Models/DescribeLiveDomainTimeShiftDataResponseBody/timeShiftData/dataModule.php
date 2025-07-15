<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainTimeShiftDataResponseBody\timeShiftData;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The storage used for time shifting. Unit: bytes.
     *
     * @example 1664165660
     *
     * @var string
     */
    public $size;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2021-03-03T00:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The type of time shifting. Examples: HLS_D1 and HLS_D7.
     *
     * @example HLS_D7
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'size' => 'Size',
        'timeStamp' => 'TimeStamp',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
