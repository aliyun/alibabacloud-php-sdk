<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomDetailResponseBody;

use AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomDetailResponseBody\result\pluginInstanceInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 房间id
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 房间标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 房间公告
     *
     * @var string
     */
    public $notice;

    /**
     * @description 房主id
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description uv
     *
     * @var int
     */
    public $uv;

    /**
     * @description 在线数
     *
     * @var int
     */
    public $onlineCount;

    /**
     * @description 活跃插件列表
     *
     * @var pluginInstanceInfoList[]
     */
    public $pluginInstanceInfoList;
    protected $_name = [
        'roomId'                 => 'RoomId',
        'title'                  => 'Title',
        'notice'                 => 'Notice',
        'ownerId'                => 'OwnerId',
        'uv'                     => 'Uv',
        'onlineCount'            => 'OnlineCount',
        'pluginInstanceInfoList' => 'PluginInstanceInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }
        if (null !== $this->pluginInstanceInfoList) {
            $res['PluginInstanceInfoList'] = [];
            if (null !== $this->pluginInstanceInfoList && \is_array($this->pluginInstanceInfoList)) {
                $n = 0;
                foreach ($this->pluginInstanceInfoList as $item) {
                    $res['PluginInstanceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }
        if (isset($map['PluginInstanceInfoList'])) {
            if (!empty($map['PluginInstanceInfoList'])) {
                $model->pluginInstanceInfoList = [];
                $n                             = 0;
                foreach ($map['PluginInstanceInfoList'] as $item) {
                    $model->pluginInstanceInfoList[$n++] = null !== $item ? pluginInstanceInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
