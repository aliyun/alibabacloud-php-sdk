<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class QueryJobsRequest extends Model
{
    /**
     * @var string
     */
    public $contactName;

    /**
     * @example 1579077794665
     *
     * @var int
     */
    public $endTime;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 994b8baf-7ef8-480c-b141-b7b6db77c4df
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 135****8888
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example b0f35dd1-0337-402e-9c4f-3a6c2426950a
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @example 1579068424883
     *
     * @var int
     */
    public $startTime;

    /**
     * @example start
     *
     * @var string
     */
    public $timeAlignment;
    protected $_name = [
        'contactName'   => 'ContactName',
        'endTime'       => 'EndTime',
        'instanceId'    => 'InstanceId',
        'jobGroupId'    => 'JobGroupId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'phoneNumber'   => 'PhoneNumber',
        'scenarioId'    => 'ScenarioId',
        'startTime'     => 'StartTime',
        'timeAlignment' => 'TimeAlignment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->timeAlignment) {
            $res['TimeAlignment'] = $this->timeAlignment;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TimeAlignment'])) {
            $model->timeAlignment = $map['TimeAlignment'];
        }

        return $model;
    }
}
