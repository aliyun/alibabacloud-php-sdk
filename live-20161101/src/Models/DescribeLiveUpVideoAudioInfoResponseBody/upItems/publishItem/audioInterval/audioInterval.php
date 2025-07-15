<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveUpVideoAudioInfoResponseBody\upItems\publishItem\audioInterval;

use AlibabaCloud\Tea\Model;

class audioInterval extends Model
{
    /**
     * @description The maximum audio frame interval. Unit: milliseconds.
     *
     * @example 1538134750408
     *
     * @var int
     */
    public $time;

    /**
     * @description The query time. The value is a UNIX timestamp in milliseconds.
     *
     * @example 254
     *
     * @var int
     */
    public $value;
    protected $_name = [
        'time' => 'Time',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return audioInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
