<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeEventResultListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $passNum;

    /**
     * @var int
     */
    public $pendingNum;

    /**
     * @var int
     */
    public $rejectNum;

    /**
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'eventCode'  => 'eventCode',
        'eventName'  => 'eventName',
        'passNum'    => 'passNum',
        'pendingNum' => 'pendingNum',
        'rejectNum'  => 'rejectNum',
        'totalNum'   => 'totalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->eventName) {
            $res['eventName'] = $this->eventName;
        }
        if (null !== $this->passNum) {
            $res['passNum'] = $this->passNum;
        }
        if (null !== $this->pendingNum) {
            $res['pendingNum'] = $this->pendingNum;
        }
        if (null !== $this->rejectNum) {
            $res['rejectNum'] = $this->rejectNum;
        }
        if (null !== $this->totalNum) {
            $res['totalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['eventName'])) {
            $model->eventName = $map['eventName'];
        }
        if (isset($map['passNum'])) {
            $model->passNum = $map['passNum'];
        }
        if (isset($map['pendingNum'])) {
            $model->pendingNum = $map['pendingNum'];
        }
        if (isset($map['rejectNum'])) {
            $model->rejectNum = $map['rejectNum'];
        }
        if (isset($map['totalNum'])) {
            $model->totalNum = $map['totalNum'];
        }

        return $model;
    }
}
