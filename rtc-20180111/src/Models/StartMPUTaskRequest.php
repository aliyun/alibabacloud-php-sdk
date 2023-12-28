<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\enhancedParam;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\userPanes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartMPUTaskRequest\watermarks;
use AlibabaCloud\Tea\Model;

class StartMPUTaskRequest extends Model
{
    /**
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @example 0
     *
     * @var int
     */
    public $backgroundColor;

    /**
     * @var backgrounds[]
     */
    public $backgrounds;

    /**
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;

    /**
     * @example 1
     *
     * @var int
     */
    public $cropMode;

    /**
     * @var enhancedParam
     */
    public $enhancedParam;

    /**
     * @example 1
     *
     * @var int[]
     */
    public $layoutIds;

    /**
     * @example 2
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @example 0
     *
     * @var int
     */
    public $mixMode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example 0
     *
     * @var int
     */
    public $payloadType;

    /**
     * @example 0
     *
     * @var int
     */
    public $reportVad;

    /**
     * @example 0
     *
     * @var int
     */
    public $rtpExtInfo;

    /**
     * @example camera
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 0
     *
     * @var int
     */
    public $streamType;

    /**
     * @example rtmp://example.com/live/stream
     *
     * @var string
     */
    public $streamURL;

    /**
     * @example audioUserID
     *
     * @var string[]
     */
    public $subSpecAudioUsers;

    /**
     * @var string[]
     */
    public $subSpecCameraUsers;

    /**
     * @var string[]
     */
    public $subSpecShareScreenUsers;

    /**
     * @example userID
     *
     * @var string[]
     */
    public $subSpecUsers;

    /**
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 0
     *
     * @var int
     */
    public $taskType;

    /**
     * @example 15273582735
     *
     * @var int
     */
    public $timeStampRef;

    /**
     * @var string[]
     */
    public $unsubSpecAudioUsers;

    /**
     * @var string[]
     */
    public $unsubSpecCameraUsers;

    /**
     * @var string[]
     */
    public $unsubSpecShareScreenUsers;

    /**
     * @var userPanes[]
     */
    public $userPanes;

    /**
     * @example 86400
     *
     * @var int
     */
    public $vadInterval;

    /**
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'appId'                     => 'AppId',
        'backgroundColor'           => 'BackgroundColor',
        'backgrounds'               => 'Backgrounds',
        'channelId'                 => 'ChannelId',
        'clockWidgets'              => 'ClockWidgets',
        'cropMode'                  => 'CropMode',
        'enhancedParam'             => 'EnhancedParam',
        'layoutIds'                 => 'LayoutIds',
        'mediaEncode'               => 'MediaEncode',
        'mixMode'                   => 'MixMode',
        'ownerId'                   => 'OwnerId',
        'payloadType'               => 'PayloadType',
        'reportVad'                 => 'ReportVad',
        'rtpExtInfo'                => 'RtpExtInfo',
        'sourceType'                => 'SourceType',
        'streamType'                => 'StreamType',
        'streamURL'                 => 'StreamURL',
        'subSpecAudioUsers'         => 'SubSpecAudioUsers',
        'subSpecCameraUsers'        => 'SubSpecCameraUsers',
        'subSpecShareScreenUsers'   => 'SubSpecShareScreenUsers',
        'subSpecUsers'              => 'SubSpecUsers',
        'taskId'                    => 'TaskId',
        'taskType'                  => 'TaskType',
        'timeStampRef'              => 'TimeStampRef',
        'unsubSpecAudioUsers'       => 'UnsubSpecAudioUsers',
        'unsubSpecCameraUsers'      => 'UnsubSpecCameraUsers',
        'unsubSpecShareScreenUsers' => 'UnsubSpecShareScreenUsers',
        'userPanes'                 => 'UserPanes',
        'vadInterval'               => 'VadInterval',
        'watermarks'                => 'Watermarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
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
        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }
        if (null !== $this->enhancedParam) {
            $res['EnhancedParam'] = null !== $this->enhancedParam ? $this->enhancedParam->toMap() : null;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->mixMode) {
            $res['MixMode'] = $this->mixMode;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }
        if (null !== $this->streamURL) {
            $res['StreamURL'] = $this->streamURL;
        }
        if (null !== $this->subSpecAudioUsers) {
            $res['SubSpecAudioUsers'] = $this->subSpecAudioUsers;
        }
        if (null !== $this->subSpecCameraUsers) {
            $res['SubSpecCameraUsers'] = $this->subSpecCameraUsers;
        }
        if (null !== $this->subSpecShareScreenUsers) {
            $res['SubSpecShareScreenUsers'] = $this->subSpecShareScreenUsers;
        }
        if (null !== $this->subSpecUsers) {
            $res['SubSpecUsers'] = $this->subSpecUsers;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->timeStampRef) {
            $res['TimeStampRef'] = $this->timeStampRef;
        }
        if (null !== $this->unsubSpecAudioUsers) {
            $res['UnsubSpecAudioUsers'] = $this->unsubSpecAudioUsers;
        }
        if (null !== $this->unsubSpecCameraUsers) {
            $res['UnsubSpecCameraUsers'] = $this->unsubSpecCameraUsers;
        }
        if (null !== $this->unsubSpecShareScreenUsers) {
            $res['UnsubSpecShareScreenUsers'] = $this->unsubSpecShareScreenUsers;
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
        if (null !== $this->vadInterval) {
            $res['VadInterval'] = $this->vadInterval;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
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
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
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
        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }
        if (isset($map['EnhancedParam'])) {
            $model->enhancedParam = enhancedParam::fromMap($map['EnhancedParam']);
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['MixMode'])) {
            $model->mixMode = $map['MixMode'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }
        if (isset($map['StreamURL'])) {
            $model->streamURL = $map['StreamURL'];
        }
        if (isset($map['SubSpecAudioUsers'])) {
            if (!empty($map['SubSpecAudioUsers'])) {
                $model->subSpecAudioUsers = $map['SubSpecAudioUsers'];
            }
        }
        if (isset($map['SubSpecCameraUsers'])) {
            if (!empty($map['SubSpecCameraUsers'])) {
                $model->subSpecCameraUsers = $map['SubSpecCameraUsers'];
            }
        }
        if (isset($map['SubSpecShareScreenUsers'])) {
            if (!empty($map['SubSpecShareScreenUsers'])) {
                $model->subSpecShareScreenUsers = $map['SubSpecShareScreenUsers'];
            }
        }
        if (isset($map['SubSpecUsers'])) {
            if (!empty($map['SubSpecUsers'])) {
                $model->subSpecUsers = $map['SubSpecUsers'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['TimeStampRef'])) {
            $model->timeStampRef = $map['TimeStampRef'];
        }
        if (isset($map['UnsubSpecAudioUsers'])) {
            if (!empty($map['UnsubSpecAudioUsers'])) {
                $model->unsubSpecAudioUsers = $map['UnsubSpecAudioUsers'];
            }
        }
        if (isset($map['UnsubSpecCameraUsers'])) {
            if (!empty($map['UnsubSpecCameraUsers'])) {
                $model->unsubSpecCameraUsers = $map['UnsubSpecCameraUsers'];
            }
        }
        if (isset($map['UnsubSpecShareScreenUsers'])) {
            if (!empty($map['UnsubSpecShareScreenUsers'])) {
                $model->unsubSpecShareScreenUsers = $map['UnsubSpecShareScreenUsers'];
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
        if (isset($map['VadInterval'])) {
            $model->vadInterval = $map['VadInterval'];
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

        return $model;
    }
}
