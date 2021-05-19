<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class QueryRingDetailListShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $callOutStatus;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $fromPhoneNumListShrink;

    /**
     * @var string
     */
    public $toPhoneNumListShrink;
    protected $_name = [
        'pageSize'               => 'PageSize',
        'pageNo'                 => 'PageNo',
        'startDate'              => 'StartDate',
        'endDate'                => 'EndDate',
        'callOutStatus'          => 'CallOutStatus',
        'extra'                  => 'Extra',
        'instanceId'             => 'InstanceId',
        'fromPhoneNumListShrink' => 'FromPhoneNumList',
        'toPhoneNumListShrink'   => 'ToPhoneNumList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->callOutStatus) {
            $res['CallOutStatus'] = $this->callOutStatus;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->fromPhoneNumListShrink) {
            $res['FromPhoneNumList'] = $this->fromPhoneNumListShrink;
        }
        if (null !== $this->toPhoneNumListShrink) {
            $res['ToPhoneNumList'] = $this->toPhoneNumListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRingDetailListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['CallOutStatus'])) {
            $model->callOutStatus = $map['CallOutStatus'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['FromPhoneNumList'])) {
            $model->fromPhoneNumListShrink = $map['FromPhoneNumList'];
        }
        if (isset($map['ToPhoneNumList'])) {
            $model->toPhoneNumListShrink = $map['ToPhoneNumList'];
        }

        return $model;
    }
}
