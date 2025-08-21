<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedRequest\userInfo;

class ListAlbumIsAddedRequest extends Model
{
    /**
     * @var string[]
     */
    public $albumIdList;

    /**
     * @var deviceInfo
     */
    public $deviceInfo;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'albumIdList' => 'AlbumIdList',
        'deviceInfo' => 'DeviceInfo',
        'userInfo' => 'UserInfo',
    ];

    public function validate()
    {
        if (\is_array($this->albumIdList)) {
            Model::validateArray($this->albumIdList);
        }
        if (null !== $this->deviceInfo) {
            $this->deviceInfo->validate();
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->albumIdList) {
            if (\is_array($this->albumIdList)) {
                $res['AlbumIdList'] = [];
                $n1 = 0;
                foreach ($this->albumIdList as $item1) {
                    $res['AlbumIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toArray($noStream) : $this->deviceInfo;
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
        if (isset($map['AlbumIdList'])) {
            if (!empty($map['AlbumIdList'])) {
                $model->albumIdList = [];
                $n1 = 0;
                foreach ($map['AlbumIdList'] as $item1) {
                    $model->albumIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceInfo'])) {
            $model->deviceInfo = deviceInfo::fromMap($map['DeviceInfo']);
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        return $model;
    }
}
