<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CloudPlayerRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CloudPlayerRequest\userInfo;
use AlibabaCloud\Tea\Model;

class CloudPlayerRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $curPlayIndex;

    /**
     * @var deviceInfo
     */
    public $deviceInfo;

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
     * @var string[]
     */
    public $songIdList;

    /**
     * @example KG
     *
     * @var string
     */
    public $source;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'curPlayIndex' => 'CurPlayIndex',
        'deviceInfo'   => 'DeviceInfo',
        'playMode'     => 'PlayMode',
        'songId'       => 'SongId',
        'songIdList'   => 'SongIdList',
        'source'       => 'Source',
        'userInfo'     => 'UserInfo',
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
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->playMode) {
            $res['PlayMode'] = $this->playMode;
        }
        if (null !== $this->songId) {
            $res['SongId'] = $this->songId;
        }
        if (null !== $this->songIdList) {
            $res['SongIdList'] = $this->songIdList;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloudPlayerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurPlayIndex'])) {
            $model->curPlayIndex = $map['CurPlayIndex'];
        }
        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }
        if (isset($map['PlayMode'])) {
            $model->playMode = $map['PlayMode'];
        }
        if (isset($map['SongId'])) {
            $model->songId = $map['SongId'];
        }
        if (isset($map['SongIdList'])) {
            if (!empty($map['SongIdList'])) {
                $model->songIdList = $map['SongIdList'];
            }
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
