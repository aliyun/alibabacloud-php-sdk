<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartRecordTaskRequest\userPanes;
use AlibabaCloud\Tea\Model;

class StartRecordTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example yourChannelId
     *
     * @var string
     */
    public $channelId;

    /**
     * @example 1
     *
     * @var int
     */
    public $cropMode;

    /**
     * @example 1111
     *
     * @var int[]
     */
    public $layoutIds;

    /**
     * @example 20
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @example 1
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
     * @example 1
     *
     * @var string[]
     */
    public $subSpecAudioUsers;

    /**
     * @example 1
     *
     * @var string[]
     */
    public $subSpecCameraUsers;

    /**
     * @example 1
     *
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
     * @description This parameter is required.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 4IN_1080P
     *
     * @var string
     */
    public $taskProfile;

    /**
     * @description This parameter is required.
     *
     * @example 76dasgb****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 1
     *
     * @var string[]
     */
    public $unsubSpecAudioUsers;

    /**
     * @example 1
     *
     * @var string[]
     */
    public $unsubSpecCameraUsers;

    /**
     * @example 1
     *
     * @var string[]
     */
    public $unsubSpecShareScreenUsers;

    /**
     * @var userPanes[]
     */
    public $userPanes;
    protected $_name = [
        'appId'                     => 'AppId',
        'channelId'                 => 'ChannelId',
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
        'taskProfile'               => 'TaskProfile',
        'templateId'                => 'TemplateId',
        'unsubSpecAudioUsers'       => 'UnsubSpecAudioUsers',
        'unsubSpecCameraUsers'      => 'UnsubSpecCameraUsers',
        'unsubSpecShareScreenUsers' => 'UnsubSpecShareScreenUsers',
        'userPanes'                 => 'UserPanes',
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
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
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
        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRecordTaskRequest
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
        if (isset($map['TaskProfile'])) {
            $model->taskProfile = $map['TaskProfile'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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

        return $model;
    }
}
