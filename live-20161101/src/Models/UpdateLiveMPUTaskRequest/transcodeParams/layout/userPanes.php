<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\layout;

use AlibabaCloud\SDK\Live\V20161101\Models\UpdateLiveMPUTaskRequest\transcodeParams\layout\userPanes\userInfo;
use AlibabaCloud\Tea\Model;

class userPanes extends Model
{
    /**
     * @description The URL of the background image of the pane. This image is displayed if the user turns off the camera or is not present in the channel.
     *
     * @example yourImageUrl
     *
     * @var string
     */
    public $backgroundImageUrl;

    /**
     * @description The height of the pane. The value is normalized.
     *
     * @example 0.2632
     *
     * @var string
     */
    public $height;

    /**
     * @description The display mode of the pane. Valid values:
     *
     *   **0**: scales the video proportionally to fit the view, with black bars displayed.
     *   **1 (default)**: crops the video to fit the view.
     *
     * @example 1
     *
     * @var string
     */
    public $renderMode;

    /**
     * @description The information about the user whose stream is played in the pane. If you leave this parameter empty, the system automatically sets this parameter based on the order in which streamers join the channel.
     *
     * >
     *
     *   If you specify the information about a user by using this parameter, the information about the user must also be specified by using the TranscodeParams.UserInfos parameter.
     *
     *   This parameter is valid only when you set StreamType to 0 or 2.
     *
     * @var userInfo
     */
    public $userInfo;

    /**
     * @description The width of the pane. The value is normalized.
     *
     * @example 0.3564
     *
     * @var string
     */
    public $width;

    /**
     * @description The x-coordinate of the pane. The value is normalized.
     *
     * @example 0.2456
     *
     * @var string
     */
    public $x;

    /**
     * @description The y-coordinate of the pane. The value is normalized.
     *
     * @example 0.3789
     *
     * @var string
     */
    public $y;

    /**
     * @description The layer in which the pane resides. A value of 0 indicates the bottom layer. Each increment of the value by 1 indicates the next upper layer.
     *
     * @example 0
     *
     * @var string
     */
    public $ZOrder;
    protected $_name = [
        'backgroundImageUrl' => 'BackgroundImageUrl',
        'height' => 'Height',
        'renderMode' => 'RenderMode',
        'userInfo' => 'UserInfo',
        'width' => 'Width',
        'x' => 'X',
        'y' => 'Y',
        'ZOrder' => 'ZOrder',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundImageUrl) {
            $res['BackgroundImageUrl'] = $this->backgroundImageUrl;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->renderMode) {
            $res['RenderMode'] = $this->renderMode;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->ZOrder) {
            $res['ZOrder'] = $this->ZOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userPanes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundImageUrl'])) {
            $model->backgroundImageUrl = $map['BackgroundImageUrl'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['RenderMode'])) {
            $model->renderMode = $map['RenderMode'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['ZOrder'])) {
            $model->ZOrder = $map['ZOrder'];
        }

        return $model;
    }
}
