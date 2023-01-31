<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptResponseBody;

use AlibabaCloud\Tea\Model;

class script extends Model
{
    /**
     * @example {\"AppKey\":\"3GHttnsvir1FeWWb\"}
     *
     * @var string
     */
    public $asrConfig;

    /**
     * @var string
     */
    public $chatbotId;

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
    public $longWaitEnable;

    /**
     * @var bool
     */
    public $miniPlaybackEnable;

    /**
     * @var bool
     */
    public $newBargeInEnable;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $scriptDescription;

    /**
     * @example 810b5872-57f0-4b27-80ab-7b3f4d8a6374
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
     * @example {\"voice\":\"xiaobei\",\"volume\":\"50\",\"speechRate\":\"-150\",\"pitchRate\":\"0\"}
     *
     * @var string
     */
    public $ttsConfig;

    /**
     * @example 1578881227000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'asrConfig'          => 'AsrConfig',
        'chatbotId'          => 'ChatbotId',
        'debugStatus'        => 'DebugStatus',
        'emotionEnable'      => 'EmotionEnable',
        'industry'           => 'Industry',
        'isDebugDrafted'     => 'IsDebugDrafted',
        'isDrafted'          => 'IsDrafted',
        'longWaitEnable'     => 'LongWaitEnable',
        'miniPlaybackEnable' => 'MiniPlaybackEnable',
        'newBargeInEnable'   => 'NewBargeInEnable',
        'scene'              => 'Scene',
        'scriptDescription'  => 'ScriptDescription',
        'scriptId'           => 'ScriptId',
        'scriptName'         => 'ScriptName',
        'status'             => 'Status',
        'ttsConfig'          => 'TtsConfig',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrConfig) {
            $res['AsrConfig'] = $this->asrConfig;
        }
        if (null !== $this->chatbotId) {
            $res['ChatbotId'] = $this->chatbotId;
        }
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
        if (null !== $this->longWaitEnable) {
            $res['LongWaitEnable'] = $this->longWaitEnable;
        }
        if (null !== $this->miniPlaybackEnable) {
            $res['MiniPlaybackEnable'] = $this->miniPlaybackEnable;
        }
        if (null !== $this->newBargeInEnable) {
            $res['NewBargeInEnable'] = $this->newBargeInEnable;
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
        if (null !== $this->ttsConfig) {
            $res['TtsConfig'] = $this->ttsConfig;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return script
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsrConfig'])) {
            $model->asrConfig = $map['AsrConfig'];
        }
        if (isset($map['ChatbotId'])) {
            $model->chatbotId = $map['ChatbotId'];
        }
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
        if (isset($map['LongWaitEnable'])) {
            $model->longWaitEnable = $map['LongWaitEnable'];
        }
        if (isset($map['MiniPlaybackEnable'])) {
            $model->miniPlaybackEnable = $map['MiniPlaybackEnable'];
        }
        if (isset($map['NewBargeInEnable'])) {
            $model->newBargeInEnable = $map['NewBargeInEnable'];
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
        if (isset($map['TtsConfig'])) {
            $model->ttsConfig = $map['TtsConfig'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
