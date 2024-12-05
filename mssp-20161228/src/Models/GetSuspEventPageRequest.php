<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetSuspEventPageRequest extends Model
{
    /**
     * @description Alarm end time.
     *
     * @example 1732515522000
     *
     * @var int
     */
    public $alarmEndTime;

    /**
     * @description Alarm start time.
     *
     * @example 1722515522000
     *
     * @var int
     */
    public $alarmStartTime;

    /**
     * @description Current page number.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Number of items per page.
     *
     * This parameter is required.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Alarm source.
     *
     * @example SUSP_EVENT
     *
     * @var string
     */
    public $source;

    /**
     * @description Disposal status.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'alarmEndTime'   => 'AlarmEndTime',
        'alarmStartTime' => 'AlarmStartTime',
        'currentPage'    => 'CurrentPage',
        'pageSize'       => 'PageSize',
        'source'         => 'Source',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEndTime) {
            $res['AlarmEndTime'] = $this->alarmEndTime;
        }
        if (null !== $this->alarmStartTime) {
            $res['AlarmStartTime'] = $this->alarmStartTime;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSuspEventPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEndTime'])) {
            $model->alarmEndTime = $map['AlarmEndTime'];
        }
        if (isset($map['AlarmStartTime'])) {
            $model->alarmStartTime = $map['AlarmStartTime'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
