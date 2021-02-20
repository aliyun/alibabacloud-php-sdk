<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\userPanes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\watermarks;
use AlibabaCloud\Tea\Model;

class StartMPUTaskRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $showLog;

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
    public $taskId;

    /**
     * @var string
     */
    public $taskProfile;

    /**
     * @var int
     */
    public $taskMode;

    /**
     * @var int
     */
    public $mixMode;

    /**
     * @var int
     */
    public $cropMode;

    /**
     * @var int
     */
    public $mediaEncode;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $streamType;

    /**
     * @var int
     */
    public $backgroundColor;

    /**
     * @var string
     */
    public $streamURL;

    /**
     * @var int
     */
    public $payloadType;

    /**
     * @var int
     */
    public $reportVad;

    /**
     * @var int
     */
    public $rtpExtInfo;

    /**
     * @var int
     */
    public $timeStampRef;

    /**
     * @var int
     */
    public $vadInterval;

    /**
     * @var string[]
     */
    public $subSpecUsers;

    /**
     * @var string[]
     */
    public $subSpecAudioUsers;

    /**
     * @var int[]
     */
    public $layoutIds;

    /**
     * @var userPanes[]
     */
    public $userPanes;

    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @var watermarks[]
     */
    public $watermarks;

    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;
    protected $_name = [
        'ownerId'           => 'OwnerId',
        'showLog'           => 'ShowLog',
        'appId'             => 'AppId',
        'channelId'         => 'ChannelId',
        'taskId'            => 'TaskId',
        'taskProfile'       => 'TaskProfile',
        'taskMode'          => 'TaskMode',
        'mixMode'           => 'MixMode',
        'cropMode'          => 'CropMode',
        'mediaEncode'       => 'MediaEncode',
        'sourceType'        => 'SourceType',
        'streamType'        => 'StreamType',
        'backgroundColor'   => 'BackgroundColor',
        'streamURL'         => 'StreamURL',
        'payloadType'       => 'PayloadType',
        'reportVad'         => 'ReportVad',
        'rtpExtInfo'        => 'RtpExtInfo',
        'timeStampRef'      => 'TimeStampRef',
        'vadInterval'       => 'VadInterval',
        'subSpecUsers'      => 'SubSpecUsers',
        'subSpecAudioUsers' => 'SubSpecAudioUsers',
        'layoutIds'         => 'LayoutIds',
        'userPanes'         => 'UserPanes',
        'backgrounds'       => 'Backgrounds',
        'watermarks'        => 'Watermarks',
        'clockWidgets'      => 'ClockWidgets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->showLog) {
            $res['ShowLog'] = $this->showLog;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
        }
        if (null !== $this->taskMode) {
            $res['TaskMode'] = $this->taskMode;
        }
        if (null !== $this->mixMode) {
            $res['MixMode'] = $this->mixMode;
        }
        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }
        if (null !== $this->payloadType) {
            $res['PayloadType'] = $this->payloadType;
        }
        if (null !== $this->reportVad) {
            $res['ReportVad'] = $this->reportVad;
        }
        if (null !== $this->rtpExtInfo) {
            $res['RtpExtInfo'] = $this->rtpExtInfo;
        }
        if (null !== $this->timeStampRef) {
            $res['TimeStampRef'] = $this->timeStampRef;
        }
        if (null !== $this->vadInterval) {
            $res['VadInterval'] = $this->vadInterval;
        }
        if (null !== $this->subSpecUsers) {
            $res['SubSpecUsers'] = $this->subSpecUsers;
        }
        if (null !== $this->subSpecAudioUsers) {
            $res['SubSpecAudioUsers'] = $this->subSpecAudioUsers;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }
        if (null !== $this->userPanes) {
            $res['UserPanes'] = [];
            if (null !== $this->userPanes && \is_array($this->userPanes)) {
                $n = 0;
                foreach ($this->userPanes as $item) {
                    $res['UserPanes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->backgrounds) {
            $res['Backgrounds'] = [];
            if (null !== $this->backgrounds && \is_array($this->backgrounds)) {
                $n = 0;
                foreach ($this->backgrounds as $item) {
                    $res['Backgrounds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->watermarks) {
            $res['Watermarks'] = [];
            if (null !== $this->watermarks && \is_array($this->watermarks)) {
                $n = 0;
                foreach ($this->watermarks as $item) {
                    $res['Watermarks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clockWidgets) {
            $res['ClockWidgets'] = [];
            if (null !== $this->clockWidgets && \is_array($this->clockWidgets)) {
                $n = 0;
                foreach ($this->clockWidgets as $item) {
                    $res['ClockWidgets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartMPUTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ShowLog'])) {
            $model->showLog = $map['ShowLog'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskProfile'])) {
            $model->taskProfile = $map['TaskProfile'];
        }
        if (isset($map['TaskMode'])) {
            $model->taskMode = $map['TaskMode'];
        }
        if (isset($map['MixMode'])) {
            $model->mixMode = $map['MixMode'];
        }
        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }
        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }
        if (isset($map['PayloadType'])) {
            $model->payloadType = $map['PayloadType'];
        }
        if (isset($map['ReportVad'])) {
            $model->reportVad = $map['ReportVad'];
        }
        if (isset($map['RtpExtInfo'])) {
            $model->rtpExtInfo = $map['RtpExtInfo'];
        }
        if (isset($map['TimeStampRef'])) {
            $model->timeStampRef = $map['TimeStampRef'];
        }
        if (isset($map['VadInterval'])) {
            $model->vadInterval = $map['VadInterval'];
        }
        if (isset($map['SubSpecUsers'])) {
            if (!empty($map['SubSpecUsers'])) {
                $model->subSpecUsers = $map['SubSpecUsers'];
            }
        }
        if (isset($map['SubSpecAudioUsers'])) {
            if (!empty($map['SubSpecAudioUsers'])) {
                $model->subSpecAudioUsers = $map['SubSpecAudioUsers'];
            }
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }
        if (isset($map['UserPanes'])) {
            if (!empty($map['UserPanes'])) {
                $model->userPanes = [];
                $n                = 0;
                foreach ($map['UserPanes'] as $item) {
                    $model->userPanes[$n++] = null !== $item ? userPanes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Backgrounds'])) {
            if (!empty($map['Backgrounds'])) {
                $model->backgrounds = [];
                $n                  = 0;
                foreach ($map['Backgrounds'] as $item) {
                    $model->backgrounds[$n++] = null !== $item ? backgrounds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Watermarks'])) {
            if (!empty($map['Watermarks'])) {
                $model->watermarks = [];
                $n                 = 0;
                foreach ($map['Watermarks'] as $item) {
                    $model->watermarks[$n++] = null !== $item ? watermarks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n                   = 0;
                foreach ($map['ClockWidgets'] as $item) {
                    $model->clockWidgets[$n++] = null !== $item ? clockWidgets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
