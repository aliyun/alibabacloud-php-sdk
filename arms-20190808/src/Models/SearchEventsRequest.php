<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchEventsRequest extends Model
{
    /**
     * @var int
     */
    public $alertId;

    /**
     * @var int
     */
    public $alertType;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $isTrigger;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'alertId'     => 'AlertId',
        'alertType'   => 'AlertType',
        'appType'     => 'AppType',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'isTrigger'   => 'IsTrigger',
        'pageSize'    => 'PageSize',
        'pid'         => 'Pid',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isTrigger) {
            $res['IsTrigger'] = $this->isTrigger;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsTrigger'])) {
            $model->isTrigger = $map['IsTrigger'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
