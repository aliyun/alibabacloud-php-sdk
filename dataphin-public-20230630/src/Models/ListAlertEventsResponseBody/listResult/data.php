<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data\alertObject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data\alertReason;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data\alertReceiverList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data\belongProject;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertEventsResponseBody\listResult\data\urlConfig;

class data extends Model
{
    /**
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
     * @var string
     */
    public $doNotDisturbEndTime;

    /**
     * @var string
     */
    public $firstAlertTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $latestAlertTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalAlertTimes;

    /**
     * @var urlConfig
     */
    public $urlConfig;
    protected $_name = [
        'alertFrequency' => 'AlertFrequency',
        'alertObject' => 'AlertObject',
        'alertReason' => 'AlertReason',
        'alertReceiverList' => 'AlertReceiverList',
        'belongProject' => 'BelongProject',
        'doNotDisturbEndTime' => 'DoNotDisturbEndTime',
        'firstAlertTime' => 'FirstAlertTime',
        'id' => 'Id',
        'latestAlertTime' => 'LatestAlertTime',
        'status' => 'Status',
        'totalAlertTimes' => 'TotalAlertTimes',
        'urlConfig' => 'UrlConfig',
    ];

    public function validate()
    {
        if (null !== $this->alertObject) {
            $this->alertObject->validate();
        }
        if (null !== $this->alertReason) {
            $this->alertReason->validate();
        }
        if (\is_array($this->alertReceiverList)) {
            Model::validateArray($this->alertReceiverList);
        }
        if (null !== $this->belongProject) {
            $this->belongProject->validate();
        }
        if (null !== $this->urlConfig) {
            $this->urlConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertFrequency) {
            $res['AlertFrequency'] = $this->alertFrequency;
        }

        if (null !== $this->alertObject) {
            $res['AlertObject'] = null !== $this->alertObject ? $this->alertObject->toArray($noStream) : $this->alertObject;
        }

        if (null !== $this->alertReason) {
            $res['AlertReason'] = null !== $this->alertReason ? $this->alertReason->toArray($noStream) : $this->alertReason;
        }

        if (null !== $this->alertReceiverList) {
            if (\is_array($this->alertReceiverList)) {
                $res['AlertReceiverList'] = [];
                $n1 = 0;
                foreach ($this->alertReceiverList as $item1) {
                    $res['AlertReceiverList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->belongProject) {
            $res['BelongProject'] = null !== $this->belongProject ? $this->belongProject->toArray($noStream) : $this->belongProject;
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
            $res['UrlConfig'] = null !== $this->urlConfig ? $this->urlConfig->toArray($noStream) : $this->urlConfig;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['AlertReceiverList'] as $item1) {
                    $model->alertReceiverList[$n1++] = alertReceiverList::fromMap($item1);
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
