<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\multiStreamURL;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\seiParams;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\singleSubParams;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks\transcodeParams;

class MPUTasks extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $maxIdleTime;

    /**
     * @var string
     */
    public $mixMode;

    /**
     * @var multiStreamURL[]
     */
    public $multiStreamURL;

    /**
     * @var string
     */
    public $region;

    /**
     * @var seiParams
     */
    public $seiParams;

    /**
     * @var singleSubParams
     */
    public $singleSubParams;

    /**
     * @var string
     */
    public $streamURL;

    /**
     * @var string
     */
    public $taskId;

    /**
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

    public function validate()
    {
        if (\is_array($this->multiStreamURL)) {
            Model::validateArray($this->multiStreamURL);
        }
        if (null !== $this->seiParams) {
            $this->seiParams->validate();
        }
        if (null !== $this->singleSubParams) {
            $this->singleSubParams->validate();
        }
        if (null !== $this->transcodeParams) {
            $this->transcodeParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->multiStreamURL)) {
                $res['MultiStreamURL'] = [];
                $n1 = 0;
                foreach ($this->multiStreamURL as $item1) {
                    $res['MultiStreamURL'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->seiParams) {
            $res['SeiParams'] = null !== $this->seiParams ? $this->seiParams->toArray($noStream) : $this->seiParams;
        }

        if (null !== $this->singleSubParams) {
            $res['SingleSubParams'] = null !== $this->singleSubParams ? $this->singleSubParams->toArray($noStream) : $this->singleSubParams;
        }

        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->transcodeParams) {
            $res['TranscodeParams'] = null !== $this->transcodeParams ? $this->transcodeParams->toArray($noStream) : $this->transcodeParams;
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
                $n1 = 0;
                foreach ($map['MultiStreamURL'] as $item1) {
                    $model->multiStreamURL[$n1] = multiStreamURL::fromMap($item1);
                    ++$n1;
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
