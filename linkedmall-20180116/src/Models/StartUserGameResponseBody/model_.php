<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\StartUserGameResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @description 进度内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 当前步骤ID
     *
     * @var string
     */
    public $currentStepId;

    /**
     * @description 当前步骤状态
     *
     * @var string
     */
    public $currentStepStatus;

    /**
     * @var string
     */
    public $desc;

    /**
     * @description 扩展信息
     *
     * @var string
     */
    public $extInfo;

    /**
     * @description 奖励记录
     *
     * @var string
     */
    public $gameAwardRecords;

    /**
     * @description 玩法币记录
     *
     * @var string
     */
    public $gameCoinRecords;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $name;

    /**
     * @description 进度ID
     *
     * @var string
     */
    public $processId;

    /**
     * @description 路线ID
     *
     * @var string
     */
    public $routeId;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'activityId'        => 'ActivityId',
        'bizId'             => 'BizId',
        'content'           => 'Content',
        'currentStepId'     => 'CurrentStepId',
        'currentStepStatus' => 'CurrentStepStatus',
        'desc'              => 'Desc',
        'extInfo'           => 'ExtInfo',
        'gameAwardRecords'  => 'GameAwardRecords',
        'gameCoinRecords'   => 'GameCoinRecords',
        'gameId'            => 'GameId',
        'name'              => 'Name',
        'processId'         => 'ProcessId',
        'routeId'           => 'RouteId',
        'status'            => 'Status',
        'type'              => 'Type',
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
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->gameAwardRecords) {
            $res['GameAwardRecords'] = $this->gameAwardRecords;
        }
        if (null !== $this->gameCoinRecords) {
            $res['GameCoinRecords'] = $this->gameCoinRecords;
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
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['GameAwardRecords'])) {
            $model->gameAwardRecords = $map['GameAwardRecords'];
        }
        if (isset($map['GameCoinRecords'])) {
            $model->gameCoinRecords = $map['GameCoinRecords'];
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
