<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeTraceInfoDetailResponseBody\traceInfoDetail;

use AlibabaCloud\Tea\Model;

class edgeList extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $endId;

    /**
     * @var string
     */
    public $startId;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'count'   => 'Count',
        'endId'   => 'EndId',
        'startId' => 'StartId',
        'time'    => 'Time',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->endId) {
            $res['EndId'] = $this->endId;
        }
        if (null !== $this->startId) {
            $res['StartId'] = $this->startId;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edgeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['EndId'])) {
            $model->endId = $map['EndId'];
        }
        if (isset($map['StartId'])) {
            $model->startId = $map['StartId'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
