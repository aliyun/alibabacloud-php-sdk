<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo\alertObject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo\alertReason;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo\alertReceiverList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo\belongProject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetAlertEventResponseBody\alertEventInfo\urlConfig;
use AlibabaCloud\Tea\Model;

class alertEventInfo extends Model
{
    /**
     * @example ONCE
     *
     * @var string
     */
    public $alertFrequency;

    /**
     * @var alertObject
     */
    public $alertObject;

    /**
     * @var alertReason
     */
    public $alertReason;

    /**
     * @var alertReceiverList[]
     */
    public $alertReceiverList;

    /**
     * @var belongProject
     */
    public $belongProject;

    /**
     * @example 2024-11-05 00:00:00
     *
     * @var string
     */
    public $doNotDisturbEndTime;

    /**
     * @example 2024-11-05 16:19:33
     *
     * @var string
     */
    public $firstAlertTime;

    /**
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @example 2024-11-05 16:19:33
     *
     * @var string
     */
    public $latestAlertTime;

    /**
     * @example FINISH
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalAlertTimes;

    /**
     * @var urlConfig
     */
    public $urlConfig;
    protected $_name = [
        'alertFrequency'      => 'AlertFrequency',
        'alertObject'         => 'AlertObject',
        'alertReason'         => 'AlertReason',
        'alertReceiverList'   => 'AlertReceiverList',
        'belongProject'       => 'BelongProject',
        'doNotDisturbEndTime' => 'DoNotDisturbEndTime',
        'firstAlertTime'      => 'FirstAlertTime',
        'id'                  => 'Id',
        'latestAlertTime'     => 'LatestAlertTime',
        'status'              => 'Status',
        'totalAlertTimes'     => 'TotalAlertTimes',
        'urlConfig'           => 'UrlConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertFrequency) {
            $res['AlertFrequency'] = $this->alertFrequency;
        }
        if (null !== $this->alertObject) {
            $res['AlertObject'] = null !== $this->alertObject ? $this->alertObject->toMap() : null;
        }
        if (null !== $this->alertReason) {
            $res['AlertReason'] = null !== $this->alertReason ? $this->alertReason->toMap() : null;
        }
        if (null !== $this->alertReceiverList) {
            $res['AlertReceiverList'] = [];
            if (null !== $this->alertReceiverList && \is_array($this->alertReceiverList)) {
                $n = 0;
                foreach ($this->alertReceiverList as $item) {
                    $res['AlertReceiverList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->belongProject) {
            $res['BelongProject'] = null !== $this->belongProject ? $this->belongProject->toMap() : null;
        }
        if (null !== $this->doNotDisturbEndTime) {
            $res['DoNotDisturbEndTime'] = $this->doNotDisturbEndTime;
        }
        if (null !== $this->firstAlertTime) {
            $res['FirstAlertTime'] = $this->firstAlertTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->latestAlertTime) {
            $res['LatestAlertTime'] = $this->latestAlertTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalAlertTimes) {
            $res['TotalAlertTimes'] = $this->totalAlertTimes;
        }
        if (null !== $this->urlConfig) {
            $res['UrlConfig'] = null !== $this->urlConfig ? $this->urlConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertEventInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertFrequency'])) {
            $model->alertFrequency = $map['AlertFrequency'];
        }
        if (isset($map['AlertObject'])) {
            $model->alertObject = alertObject::fromMap($map['AlertObject']);
        }
        if (isset($map['AlertReason'])) {
            $model->alertReason = alertReason::fromMap($map['AlertReason']);
        }
        if (isset($map['AlertReceiverList'])) {
            if (!empty($map['AlertReceiverList'])) {
                $model->alertReceiverList = [];
                $n                        = 0;
                foreach ($map['AlertReceiverList'] as $item) {
                    $model->alertReceiverList[$n++] = null !== $item ? alertReceiverList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BelongProject'])) {
            $model->belongProject = belongProject::fromMap($map['BelongProject']);
        }
        if (isset($map['DoNotDisturbEndTime'])) {
            $model->doNotDisturbEndTime = $map['DoNotDisturbEndTime'];
        }
        if (isset($map['FirstAlertTime'])) {
            $model->firstAlertTime = $map['FirstAlertTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LatestAlertTime'])) {
            $model->latestAlertTime = $map['LatestAlertTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalAlertTimes'])) {
            $model->totalAlertTimes = $map['TotalAlertTimes'];
        }
        if (isset($map['UrlConfig'])) {
            $model->urlConfig = urlConfig::fromMap($map['UrlConfig']);
        }

        return $model;
    }
}
