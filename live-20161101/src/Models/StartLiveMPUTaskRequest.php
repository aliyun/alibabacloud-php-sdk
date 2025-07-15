<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\multiStreamURL;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\seiParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\singleSubParams;
use AlibabaCloud\SDK\Live\V20161101\Models\StartLiveMPUTaskRequest\transcodeParams;
use AlibabaCloud\Tea\Model;

class StartLiveMPUTaskRequest extends Model
{
    /**
     * @description The application ID. You can specify only one application ID. The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The channel ID. You can specify only one channel ID. The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @description The timeout period of an idle connection. Unit: seconds. Valid values: [10,86400].
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
     *   **0**: the single-stream relay mode. In this mode, the service only relays the original single stream, but does not transcode mixed streams. You do not need to set parameters for mixed-stream transcoding.
     *   **1** (default): the mixed-stream relay mode.
     *
     * This parameter is required.
     *
     * @example 0
     *
     * @var string
     */
    public $mixMode;

    /**
     * @description The multiple ingest URLs to relay. This parameter allows you to specify multiple ingest URLs.
     *
     * >  The StreamURL and MultiStreamURL parameters are mutually exclusive. You must specify one of the two parameters.
     *
     * @var multiStreamURL[]
     */
    public $multiStreamURL;

    /**
     * @description The region in which the streams are mixed. Valid values:
     *
     *   **CN-Shanghai**
     *   **AP-Singapore** (default)
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
     * @description The single-stream relay parameters. These parameters are required if you set MixMode to 0. Leave these parameters empty in the mixed-stream relay mode.
     *
     * @var singleSubParams
     */
    public $singleSubParams;

    /**
     * @description The ingest URL. You can specify only one ingest URL in the Real-Time Messaging Protocol (RTMP) format. The URL can be up to 2,048 characters in length. For information about the generation rules of ingest URLs, see [Ingest and streaming URLs](https://help.aliyun.com/document_detail/199339.html).
     *
     * >
     *
     *   If the ingest URL is under a domain name for which hotlink protection is enabled, you must include an access token in the URL.
     *   You cannot use the same ingest URL in different tasks.
     *   You cannot use the same ingest URL within 10 seconds after a task is stopped.
     *
     * @example rtmp://example.com/live/stream
     *
     * @var string
     */
    public $streamURL;

    /**
     * @description The task ID. You can specify only one task ID. The ID can be up to 55 characters in length and can contain letters, digits, underscores (_), and hyphens (-). The ID must be unique.
     *
     * This parameter is required.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The mixed-stream relay parameters. These parameters are required if you set MixMode to 1. Leave these parameters empty if you use the single-stream relay mode.
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
     * @return StartLiveMPUTaskRequest
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
