<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListAlarmHistoriesRequest extends Model
{
    /**
     * @var string
     */
    public $requestPars;

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
    public $alarmMseType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $alarmName;
    protected $_name = [
        'requestPars'  => 'RequestPars',
        'pageNum'      => 'PageNum',
        'pageSize'     => 'PageSize',
        'alarmMseType' => 'AlarmMseType',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'alarmName'    => 'AlarmName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->alarmMseType) {
            $res['AlarmMseType'] = $this->alarmMseType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->alarmName) {
            $res['AlarmName'] = $this->alarmName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlarmHistoriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AlarmMseType'])) {
            $model->alarmMseType = $map['AlarmMseType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['AlarmName'])) {
            $model->alarmName = $map['AlarmName'];
        }

        return $model;
    }
}
