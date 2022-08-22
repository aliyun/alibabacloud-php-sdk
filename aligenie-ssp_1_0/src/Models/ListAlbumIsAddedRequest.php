<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedRequest\deviceInfo;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListAlbumIsAddedRequest\userInfo;
use AlibabaCloud\Tea\Model;

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
        'deviceInfo'  => 'DeviceInfo',
        'userInfo'    => 'UserInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumIdList) {
            $res['AlbumIdList'] = $this->albumIdList;
        }
        if (null !== $this->deviceInfo) {
            $res['DeviceInfo'] = null !== $this->deviceInfo ? $this->deviceInfo->toMap() : null;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlbumIsAddedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumIdList'])) {
            if (!empty($map['AlbumIdList'])) {
                $model->albumIdList = $map['AlbumIdList'];
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
