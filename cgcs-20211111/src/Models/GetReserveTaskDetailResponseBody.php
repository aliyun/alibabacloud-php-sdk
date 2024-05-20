<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\GetReserveTaskDetailResponseBody\resBatchList;
use AlibabaCloud\Tea\Model;

class GetReserveTaskDetailResponseBody extends Model
{
    /**
     * @example 13027****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 35067****
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 100
     *
     * @var int
     */
    public $currCompletedSessionCapacity;

    /**
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @example 2022-02-02 22:22:22
     *
     * @var string
     */
    public $expectResourceReadyTime;

    /**
     * @example 100
     *
     * @var int
     */
    public $expectSessionCapacity;

    /**
     * @example d9a8****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 46329898-489C-4E63-9BA1-C1DA5C5D0986
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resBatchList[]
     */
    public $resBatchList;

    /**
     * @example b354****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example created
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'appId'                        => 'AppId',
        'appVersion'                   => 'AppVersion',
        'currCompletedSessionCapacity' => 'CurrCompletedSessionCapacity',
        'districtId'                   => 'DistrictId',
        'expectResourceReadyTime'      => 'ExpectResourceReadyTime',
        'expectSessionCapacity'        => 'ExpectSessionCapacity',
        'projectId'                    => 'ProjectId',
        'requestId'                    => 'RequestId',
        'resBatchList'                 => 'ResBatchList',
        'taskId'                       => 'TaskId',
        'taskStatus'                   => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->currCompletedSessionCapacity) {
            $res['CurrCompletedSessionCapacity'] = $this->currCompletedSessionCapacity;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->expectResourceReadyTime) {
            $res['ExpectResourceReadyTime'] = $this->expectResourceReadyTime;
        }
        if (null !== $this->expectSessionCapacity) {
            $res['ExpectSessionCapacity'] = $this->expectSessionCapacity;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resBatchList) {
            $res['ResBatchList'] = [];
            if (null !== $this->resBatchList && \is_array($this->resBatchList)) {
                $n = 0;
                foreach ($this->resBatchList as $item) {
                    $res['ResBatchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetReserveTaskDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['CurrCompletedSessionCapacity'])) {
            $model->currCompletedSessionCapacity = $map['CurrCompletedSessionCapacity'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['ExpectResourceReadyTime'])) {
            $model->expectResourceReadyTime = $map['ExpectResourceReadyTime'];
        }
        if (isset($map['ExpectSessionCapacity'])) {
            $model->expectSessionCapacity = $map['ExpectSessionCapacity'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResBatchList'])) {
            if (!empty($map['ResBatchList'])) {
                $model->resBatchList = [];
                $n                   = 0;
                foreach ($map['ResBatchList'] as $item) {
                    $model->resBatchList[$n++] = null !== $item ? resBatchList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
