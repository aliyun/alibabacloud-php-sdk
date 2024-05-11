<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetRumDataForPageRequest extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $appGroup;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1713774233
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example iixxxjcnuk@582846f37******
     *
     * @var string
     */
    public $pid;

    /**
     * @example * and app.id: xxxx@586810fbxxxx19f
     *
     * @var string
     */
    public $query;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1713687833
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'appGroup'    => 'AppGroup',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'pageSize'    => 'PageSize',
        'pid'         => 'Pid',
        'query'       => 'Query',
        'regionId'    => 'RegionId',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->query) {
            $res['Query'] = $this->query;
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
     * @return GetRumDataForPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['Query'])) {
            $model->query = $map['Query'];
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
