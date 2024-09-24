<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDataFlowSubTasksResponseBody\dataFlowSubTask\dataFlowSubTask;

use AlibabaCloud\Tea\Model;

class progressStats extends Model
{
    /**
     * @example 68
     *
     * @var int
     */
    public $actualBytes;

    /**
     * @example 34
     *
     * @var int
     */
    public $averageSpeed;

    /**
     * @example 68
     *
     * @var int
     */
    public $bytesDone;

    /**
     * @example 68
     *
     * @var int
     */
    public $bytesTotal;
    protected $_name = [
        'actualBytes'  => 'ActualBytes',
        'averageSpeed' => 'AverageSpeed',
        'bytesDone'    => 'BytesDone',
        'bytesTotal'   => 'BytesTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actualBytes) {
            $res['ActualBytes'] = $this->actualBytes;
        }
        if (null !== $this->averageSpeed) {
            $res['AverageSpeed'] = $this->averageSpeed;
        }
        if (null !== $this->bytesDone) {
            $res['BytesDone'] = $this->bytesDone;
        }
        if (null !== $this->bytesTotal) {
            $res['BytesTotal'] = $this->bytesTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return progressStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActualBytes'])) {
            $model->actualBytes = $map['ActualBytes'];
        }
        if (isset($map['AverageSpeed'])) {
            $model->averageSpeed = $map['AverageSpeed'];
        }
        if (isset($map['BytesDone'])) {
            $model->bytesDone = $map['BytesDone'];
        }
        if (isset($map['BytesTotal'])) {
            $model->bytesTotal = $map['BytesTotal'];
        }

        return $model;
    }
}
