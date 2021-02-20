<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateMPURuleRequest extends Model
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
    public $channelPrefix;

    /**
     * @var int
     */
    public $mediaEncode;

    /**
     * @var int
     */
    public $backgroundColor;

    /**
     * @var int
     */
    public $cropMode;

    /**
     * @var string
     */
    public $taskProfile;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $callBack;

    /**
     * @var int[]
     */
    public $layoutIds;
    protected $_name = [
        'ownerId'         => 'OwnerId',
        'showLog'         => 'ShowLog',
        'appId'           => 'AppId',
        'channelPrefix'   => 'ChannelPrefix',
        'mediaEncode'     => 'MediaEncode',
        'backgroundColor' => 'BackgroundColor',
        'cropMode'        => 'CropMode',
        'taskProfile'     => 'TaskProfile',
        'playDomain'      => 'PlayDomain',
        'callBack'        => 'CallBack',
        'layoutIds'       => 'LayoutIds',
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
        if (null !== $this->channelPrefix) {
            $res['ChannelPrefix'] = $this->channelPrefix;
        }
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->backgroundColor) {
            $res['BackgroundColor'] = $this->backgroundColor;
        }
        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }
        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMPURuleRequest
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
        if (isset($map['ChannelPrefix'])) {
            $model->channelPrefix = $map['ChannelPrefix'];
        }
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['BackgroundColor'])) {
            $model->backgroundColor = $map['BackgroundColor'];
        }
        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }
        if (isset($map['TaskProfile'])) {
            $model->taskProfile = $map['TaskProfile'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }

        return $model;
    }
}
