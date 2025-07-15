<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKVvDataResponseBody;

use AlibabaCloud\Tea\Model;

class vvData extends Model
{
    /**
     * @description The timestamp of the returned data.
     *
     * @example 2021-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The number of successful playbacks within the period of time.
     *
     * @example 99
     *
     * @var string
     */
    public $vvSuccess;

    /**
     * @description The total number of playbacks within the period of time.
     *
     * @example 100
     *
     * @var string
     */
    public $vvTotal;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'vvSuccess' => 'VvSuccess',
        'vvTotal' => 'VvTotal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->vvSuccess) {
            $res['VvSuccess'] = $this->vvSuccess;
        }
        if (null !== $this->vvTotal) {
            $res['VvTotal'] = $this->vvTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vvData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['VvSuccess'])) {
            $model->vvSuccess = $map['VvSuccess'];
        }
        if (isset($map['VvTotal'])) {
            $model->vvTotal = $map['VvTotal'];
        }

        return $model;
    }
}
