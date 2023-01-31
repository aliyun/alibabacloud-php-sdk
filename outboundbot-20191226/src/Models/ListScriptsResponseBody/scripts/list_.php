<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListScriptsResponseBody\scripts;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example DRAFTED
     *
     * @var string
     */
    public $debugStatus;

    /**
     * @var bool
     */
    public $emotionEnable;

    /**
     * @var string
     */
    public $industry;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDebugDrafted;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDrafted;

    /**
     * @var bool
     */
    public $isPreset;

    /**
     * @var bool
     */
    public $longWaitEnable;

    /**
     * @var bool
     */
    public $miniPlaybackEnable;

    /**
     * @example false
     *
     * @var bool
     */
    public $newBargeInEnable;

    /**
     * @var string
     */
    public $rejectReason;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $scriptDescription;

    /**
     * @example 8d6a6e41-8093-49af-a9d1-0281878758ac
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @example DRAFTED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1578965079000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'debugStatus'        => 'DebugStatus',
        'emotionEnable'      => 'EmotionEnable',
        'industry'           => 'Industry',
        'isDebugDrafted'     => 'IsDebugDrafted',
        'isDrafted'          => 'IsDrafted',
        'isPreset'           => 'IsPreset',
        'longWaitEnable'     => 'LongWaitEnable',
        'miniPlaybackEnable' => 'MiniPlaybackEnable',
        'newBargeInEnable'   => 'NewBargeInEnable',
        'rejectReason'       => 'RejectReason',
        'scene'              => 'Scene',
        'scriptDescription'  => 'ScriptDescription',
        'scriptId'           => 'ScriptId',
        'scriptName'         => 'ScriptName',
        'status'             => 'Status',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugStatus) {
            $res['DebugStatus'] = $this->debugStatus;
        }
        if (null !== $this->emotionEnable) {
            $res['EmotionEnable'] = $this->emotionEnable;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->isDebugDrafted) {
            $res['IsDebugDrafted'] = $this->isDebugDrafted;
        }
        if (null !== $this->isDrafted) {
            $res['IsDrafted'] = $this->isDrafted;
        }
        if (null !== $this->isPreset) {
            $res['IsPreset'] = $this->isPreset;
        }
        if (null !== $this->longWaitEnable) {
            $res['LongWaitEnable'] = $this->longWaitEnable;
        }
        if (null !== $this->miniPlaybackEnable) {
            $res['MiniPlaybackEnable'] = $this->miniPlaybackEnable;
        }
        if (null !== $this->newBargeInEnable) {
            $res['NewBargeInEnable'] = $this->newBargeInEnable;
        }
        if (null !== $this->rejectReason) {
            $res['RejectReason'] = $this->rejectReason;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->scriptDescription) {
            $res['ScriptDescription'] = $this->scriptDescription;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebugStatus'])) {
            $model->debugStatus = $map['DebugStatus'];
        }
        if (isset($map['EmotionEnable'])) {
            $model->emotionEnable = $map['EmotionEnable'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['IsDebugDrafted'])) {
            $model->isDebugDrafted = $map['IsDebugDrafted'];
        }
        if (isset($map['IsDrafted'])) {
            $model->isDrafted = $map['IsDrafted'];
        }
        if (isset($map['IsPreset'])) {
            $model->isPreset = $map['IsPreset'];
        }
        if (isset($map['LongWaitEnable'])) {
            $model->longWaitEnable = $map['LongWaitEnable'];
        }
        if (isset($map['MiniPlaybackEnable'])) {
            $model->miniPlaybackEnable = $map['MiniPlaybackEnable'];
        }
        if (isset($map['NewBargeInEnable'])) {
            $model->newBargeInEnable = $map['NewBargeInEnable'];
        }
        if (isset($map['RejectReason'])) {
            $model->rejectReason = $map['RejectReason'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['ScriptDescription'])) {
            $model->scriptDescription = $map['ScriptDescription'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
