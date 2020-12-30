<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeSDKStatisticResultByEsnBizISPIntervalResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $ispId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'index'  => 'Index',
        'time'   => 'Time',
        'result' => 'Result',
        'ispId'  => 'IspId',
        'count'  => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->ispId) {
            $res['IspId'] = $this->ispId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['IspId'])) {
            $model->ispId = $map['IspId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
