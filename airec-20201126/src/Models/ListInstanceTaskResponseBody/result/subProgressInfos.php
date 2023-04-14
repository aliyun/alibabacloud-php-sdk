<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListInstanceTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class subProgressInfos extends Model
{
    /**
     * @example data import progress info
     *
     * @var string
     */
    public $detail;

    /**
     * @example 11
     *
     * @var int
     */
    public $finishedNum;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example 11
     *
     * @var int
     */
    public $totalNum;

    /**
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'detail'      => 'detail',
        'finishedNum' => 'finishedNum',
        'progress'    => 'progress',
        'totalNum'    => 'totalNum',
        'type'        => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
        if (null !== $this->finishedNum) {
            $res['finishedNum'] = $this->finishedNum;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->totalNum) {
            $res['totalNum'] = $this->totalNum;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subProgressInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }
        if (isset($map['finishedNum'])) {
            $model->finishedNum = $map['finishedNum'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['totalNum'])) {
            $model->totalNum = $map['totalNum'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
