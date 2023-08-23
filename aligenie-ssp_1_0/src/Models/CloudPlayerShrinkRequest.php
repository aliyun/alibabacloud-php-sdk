<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Tea\Model;

class CloudPlayerShrinkRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $curPlayIndex;

    /**
     * @var string
     */
    public $deviceInfoShrink;

    /**
     * @example Normal
     *
     * @var string
     */
    public $playMode;

    /**
     * @example 123
     *
     * @var string
     */
    public $songId;

    /**
     * @var string
     */
    public $songIdListShrink;

    /**
     * @example KG
     *
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $userInfoShrink;
    protected $_name = [
        'curPlayIndex'     => 'CurPlayIndex',
        'deviceInfoShrink' => 'DeviceInfo',
        'playMode'         => 'PlayMode',
        'songId'           => 'SongId',
        'songIdListShrink' => 'SongIdList',
        'source'           => 'Source',
        'userInfoShrink'   => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->curPlayIndex) {
            $res['CurPlayIndex'] = $this->curPlayIndex;
        }
        if (null !== $this->deviceInfoShrink) {
            $res['DeviceInfo'] = $this->deviceInfoShrink;
        }
        if (null !== $this->playMode) {
            $res['PlayMode'] = $this->playMode;
        }
        if (null !== $this->songId) {
            $res['SongId'] = $this->songId;
        }
        if (null !== $this->songIdListShrink) {
            $res['SongIdList'] = $this->songIdListShrink;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloudPlayerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurPlayIndex'])) {
            $model->curPlayIndex = $map['CurPlayIndex'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfoShrink = $map['DeviceInfo'];
        }
        if (isset($map['PlayMode'])) {
            $model->playMode = $map['PlayMode'];
        }
        if (isset($map['SongId'])) {
            $model->songId = $map['SongId'];
        }
        if (isset($map['SongIdList'])) {
            $model->songIdListShrink = $map['SongIdList'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        return $model;
    }
}
