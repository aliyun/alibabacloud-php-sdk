<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest\backgrounds;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest\userPanes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateMPUTaskRequest\watermarks;
use AlibabaCloud\Tea\Model;

class UpdateMPUTaskRequest extends Model
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
     * @var string[]
     */
    public $subSpecUsers;

    /**
     * @example testId
     *
     * @var string
     */
    public $taskId;

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
     * @var watermarks[]
     */
    public $watermarks;
    protected $_name = [
        'appId'                     => 'AppId',
        'backgroundColor'           => 'BackgroundColor',
        'backgrounds'               => 'Backgrounds',
        'clockWidgets'              => 'ClockWidgets',
        'cropMode'                  => 'CropMode',
        'layoutIds'                 => 'LayoutIds',
        'mediaEncode'               => 'MediaEncode',
        'mixMode'                   => 'MixMode',
        'ownerId'                   => 'OwnerId',
        'sourceType'                => 'SourceType',
        'streamType'                => 'StreamType',
        'subSpecAudioUsers'         => 'SubSpecAudioUsers',
        'subSpecCameraUsers'        => 'SubSpecCameraUsers',
        'subSpecShareScreenUsers'   => 'SubSpecShareScreenUsers',
        'subSpecUsers'              => 'SubSpecUsers',
        'taskId'                    => 'TaskId',
        'unsubSpecAudioUsers'       => 'UnsubSpecAudioUsers',
        'unsubSpecCameraUsers'      => 'UnsubSpecCameraUsers',
        'unsubSpecShareScreenUsers' => 'UnsubSpecShareScreenUsers',
        'userPanes'                 => 'UserPanes',
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
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
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
     * @return UpdateMPUTaskRequest
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
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
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
