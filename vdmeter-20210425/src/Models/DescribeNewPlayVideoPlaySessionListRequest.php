<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models;

use AlibabaCloud\Tea\Model;

class DescribeNewPlayVideoPlaySessionListRequest extends Model
{
    /**
     * @var string
     */
    public $endTimeStamp;

    /**
     * @var string
     */
    public $inputStatus;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startTimeStamp;

    /**
     * @var string
     */
    public $uniqueId;
    protected $_name = [
        'endTimeStamp'   => 'EndTimeStamp',
        'inputStatus'    => 'InputStatus',
        'order'          => 'Order',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'startTimeStamp' => 'StartTimeStamp',
        'uniqueId'       => 'UniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimeStamp) {
            $res['EndTimeStamp'] = $this->endTimeStamp;
        }
        if (null !== $this->inputStatus) {
            $res['InputStatus'] = $this->inputStatus;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTimeStamp) {
            $res['StartTimeStamp'] = $this->startTimeStamp;
        }
        if (null !== $this->uniqueId) {
            $res['UniqueId'] = $this->uniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNewPlayVideoPlaySessionListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimeStamp'])) {
            $model->endTimeStamp = $map['EndTimeStamp'];
        }
        if (isset($map['InputStatus'])) {
            $model->inputStatus = $map['InputStatus'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTimeStamp'])) {
            $model->startTimeStamp = $map['StartTimeStamp'];
        }
        if (isset($map['UniqueId'])) {
            $model->uniqueId = $map['UniqueId'];
        }

        return $model;
    }
}
