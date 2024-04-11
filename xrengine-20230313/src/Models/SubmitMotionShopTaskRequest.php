<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class SubmitMotionShopTaskRequest extends Model
{
    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var int
     */
    public $selectedBoxIndex;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'avatarId'         => 'AvatarId',
        'jwtToken'         => 'JwtToken',
        'selectedBoxIndex' => 'SelectedBoxIndex',
        'title'            => 'Title',
        'videoId'          => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarId) {
            $res['AvatarId'] = $this->avatarId;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->selectedBoxIndex) {
            $res['SelectedBoxIndex'] = $this->selectedBoxIndex;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitMotionShopTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarId'])) {
            $model->avatarId = $map['AvatarId'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['SelectedBoxIndex'])) {
            $model->selectedBoxIndex = $map['SelectedBoxIndex'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
