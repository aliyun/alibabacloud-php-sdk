<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetQosFlowUsageRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $curPageNum;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $month;

    /**
     * @var int
     */
    public $numPerPage;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var bool
     */
    public $type;
    protected $_name = [
        'aliUid'     => 'AliUid',
        'curPageNum' => 'CurPageNum',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'month'      => 'Month',
        'numPerPage' => 'NumPerPage',
        'startTime'  => 'StartTime',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->curPageNum) {
            $res['CurPageNum'] = $this->curPageNum;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->numPerPage) {
            $res['NumPerPage'] = $this->numPerPage;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQosFlowUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CurPageNum'])) {
            $model->curPageNum = $map['CurPageNum'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['NumPerPage'])) {
            $model->numPerPage = $map['NumPerPage'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
