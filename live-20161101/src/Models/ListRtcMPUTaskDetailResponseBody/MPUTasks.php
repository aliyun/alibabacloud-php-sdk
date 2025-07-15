<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\multiStreamURL;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\seiParams;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\singleSubParams;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams;
use AlibabaCloud\Tea\Model;

class MPUTasks extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the channel.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The timeout period of an idle connection. Unit: seconds.
     *
     * >  If the task is idle for a period of time longer than the duration specified by the MaxIdleTime parameter, the task is automatically stopped. If the parameter is not specified, the task is stopped after the channel is closed.
     *
     * @example 10
     *
     * @var string
     */
    public $maxIdleTime;

    /**
     * @description The stream mixing mode. Valid values:
     *
     *   0: relays the original single stream without mixing streams. If the value of this parameter is 0, the TranscodeParams parameter is empty.
     *   1 (default): mixes multiple streams into a single stream and relays the mixed stream.
     *
     * @example 0
     *
     * @var string
     */
    public $mixMode;

    /**
     * @description The multiple ingest URLs relayed.
     *
     * @var multiStreamURL[]
     */
    public $multiStreamURL;

    /**
     * @description The region in which the streams are mixed. Valid values:
     *
     *   **CN-shanghai**
     *   **AP-Singapore (default)**
     *   **EMAA-Saudi**
     *
     * @example CN-Shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The supplemental enhancement information (SEI) parameters.
     *
     * @var seiParams
     */
    public $seiParams;

    /**
     * @description The parameters of the single-stream relay task.
     *
     * @var singleSubParams
     */
    public $singleSubParams;

    /**
     * @description The ingest URL.
     *
     * @example rtmp://example.com/live/stream****
     *
     * @var string
     */
    public $streamURL;

    /**
     * @description The ID of the stream relay task.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The mixed-stream relay parameters.
     *
     * @var transcodeParams
     */
    public $transcodeParams;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'maxIdleTime' => 'MaxIdleTime',
        'mixMode' => 'MixMode',
        'multiStreamURL' => 'MultiStreamURL',
        'region' => 'Region',
        'seiParams' => 'SeiParams',
        'singleSubParams' => 'SingleSubParams',
        'streamURL' => 'StreamURL',
        'taskId' => 'TaskId',
        'transcodeParams' => 'TranscodeParams',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->maxIdleTime) {
            $res['MaxIdleTime'] = $this->maxIdleTime;
        }
        if (null !== $this->mixMode) {
            $res['MixMode'] = $this->mixMode;
        }
        if (null !== $this->multiStreamURL) {
            $res['MultiStreamURL'] = [];
            if (null !== $this->multiStreamURL && \is_array($this->multiStreamURL)) {
                $n = 0;
                foreach ($this->multiStreamURL as $item) {
                    $res['MultiStreamURL'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->seiParams) {
            $res['SeiParams'] = null !== $this->seiParams ? $this->seiParams->toMap() : null;
        }
        if (null !== $this->singleSubParams) {
            $res['SingleSubParams'] = null !== $this->singleSubParams ? $this->singleSubParams->toMap() : null;
        }
        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->transcodeParams) {
            $res['TranscodeParams'] = null !== $this->transcodeParams ? $this->transcodeParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MPUTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['MaxIdleTime'])) {
            $model->maxIdleTime = $map['MaxIdleTime'];
        }
        if (isset($map['MixMode'])) {
            $model->mixMode = $map['MixMode'];
        }
        if (isset($map['MultiStreamURL'])) {
            if (!empty($map['MultiStreamURL'])) {
                $model->multiStreamURL = [];
                $n = 0;
                foreach ($map['MultiStreamURL'] as $item) {
                    $model->multiStreamURL[$n++] = null !== $item ? multiStreamURL::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SeiParams'])) {
            $model->seiParams = seiParams::fromMap($map['SeiParams']);
        }
        if (isset($map['SingleSubParams'])) {
            $model->singleSubParams = singleSubParams::fromMap($map['SingleSubParams']);
        }
        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TranscodeParams'])) {
            $model->transcodeParams = transcodeParams::fromMap($map['TranscodeParams']);
        }

        return $model;
    }
}
