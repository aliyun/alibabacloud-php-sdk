<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CloudPlayerRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CloudPlayerRequest\userInfo;

class CloudPlayerRequest extends Model
{
    /**
     * @var int
     */
    public $curPlayIndex;

    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var string
     */
    public $playMode;

    /**
     * @var string
     */
    public $songId;

    /**
     * @var string[]
     */
    public $songIdList;

    /**
     * @var string
     */
    public $source;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'curPlayIndex' => 'CurPlayIndex',
        'deviceInfo' => 'DeviceInfo',
        'playMode' => 'PlayMode',
        'songId' => 'SongId',
        'songIdList' => 'SongIdList',
        'source' => 'Source',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (\is_array($this->songIdList)) {
            Model::validateArray($this->songIdList);
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->curPlayIndex) {
            $res['CurPlayIndex'] = $this->curPlayIndex;
        }

        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
        }

        if (null !== $this->playMode) {
            $res['PlayMode'] = $this->playMode;
        }

        if (null !== $this->songId) {
            $res['SongId'] = $this->songId;
        }

        if (null !== $this->songIdList) {
            if (\is_array($this->songIdList)) {
                $res['SongIdList'] = [];
                $n1 = 0;
                foreach ($this->songIdList as $item1) {
                    $res['SongIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
                $model->songIdList = [];
                $n1 = 0;
                foreach ($map['SongIdList'] as $item1) {
                    $model->songIdList[$n1] = $item1;
                    ++$n1;
                }
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
