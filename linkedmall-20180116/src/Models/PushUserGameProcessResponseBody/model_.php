<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\PushUserGameProcessResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $activityId;

    /**
     * @example ""
     *
     * @var string
     */
    public $currentShowContent;

    /**
     * @example ""
     *
     * @var string
     */
    public $currentStepId;

    /**
     * @example ""
     *
     * @var string
     */
    public $currentStepStatus;

    /**
     * @example ""
     *
     * @var string
     */
    public $desc;

    /**
     * @example {"key":"value"}
     *
     * @var string
     */
    public $extInfo;

    /**
     * @example 67176******67874
     *
     * @var string
     */
    public $gameId;

    /**
     * @example ""
     *
     * @var string
     */
    public $name;

    /**
     * @example 6734******4397953
     *
     * @var string
     */
    public $processId;

    /**
     * @example RouteId_1
     *
     * @var string
     */
    public $routeId;

    /**
     * @example ""
     *
     * @var string
     */
    public $status;

    /**
     * @example ""
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'activityId'         => 'ActivityId',
        'currentShowContent' => 'CurrentShowContent',
        'currentStepId'      => 'CurrentStepId',
        'currentStepStatus'  => 'CurrentStepStatus',
        'desc'               => 'Desc',
        'extInfo'            => 'ExtInfo',
        'gameId'             => 'GameId',
        'name'               => 'Name',
        'processId'          => 'ProcessId',
        'routeId'            => 'RouteId',
        'status'             => 'Status',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->currentShowContent) {
            $res['CurrentShowContent'] = $this->currentShowContent;
        }
        if (null !== $this->currentStepId) {
            $res['CurrentStepId'] = $this->currentStepId;
        }
        if (null !== $this->currentStepStatus) {
            $res['CurrentStepStatus'] = $this->currentStepStatus;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->routeId) {
            $res['RouteId'] = $this->routeId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['CurrentShowContent'])) {
            $model->currentShowContent = $map['CurrentShowContent'];
        }
        if (isset($map['CurrentStepId'])) {
            $model->currentStepId = $map['CurrentStepId'];
        }
        if (isset($map['CurrentStepStatus'])) {
            $model->currentStepStatus = $map['CurrentStepStatus'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['RouteId'])) {
            $model->routeId = $map['RouteId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
