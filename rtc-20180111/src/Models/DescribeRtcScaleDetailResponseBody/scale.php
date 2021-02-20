<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRtcScaleDetailResponseBody;

use AlibabaCloud\Tea\Model;

class scale extends Model
{
    /**
     * @var int
     */
    public $CC;

    /**
     * @var string
     */
    public $TS;

    /**
     * @var int
     */
    public $UC;
    protected $_name = [
        'CC' => 'CC',
        'TS' => 'TS',
        'UC' => 'UC',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CC) {
            $res['CC'] = $this->CC;
        }
        if (null !== $this->TS) {
            $res['TS'] = $this->TS;
        }
        if (null !== $this->UC) {
            $res['UC'] = $this->UC;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scale
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CC'])) {
            $model->CC = $map['CC'];
        }
        if (isset($map['TS'])) {
            $model->TS = $map['TS'];
        }
        if (isset($map['UC'])) {
            $model->UC = $map['UC'];
        }

        return $model;
    }
}
