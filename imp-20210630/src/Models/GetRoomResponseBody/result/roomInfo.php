<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomResponseBody\result;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomResponseBody\result\roomInfo\pluginInstanceInfoList;
use AlibabaCloud\Tea\Model;

class roomInfo extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间创建时间戳，单位：毫秒。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 房间拓展字段。
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description 房间公告。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 在线用户数。
     *
     * @var int
     */
    public $onlineCount;

    /**
     * @description 活跃插件列表。
     *
     * @var pluginInstanceInfoList[]
     */
    public $pluginInstanceInfoList;

    /**
     * @description 访问用户人次。
     *
     * @var int
     */
    public $pv;

    /**
     * @description 房间唯一标识。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 房主用户id。
     *
     * @var string
     */
    public $roomOwnerId;

    /**
     * @description 创建房间使用的模板id。
     *
     * @var string
     */
    public $templateId;

    /**
     * @description 房间标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 访问用户数。
     *
     * @var int
     */
    public $uv;
    protected $_name = [
        'appId'                  => 'AppId',
        'createTime'             => 'CreateTime',
        'extension'              => 'Extension',
        'notice'                 => 'Notice',
        'onlineCount'            => 'OnlineCount',
        'pluginInstanceInfoList' => 'PluginInstanceInfoList',
        'pv'                     => 'Pv',
        'roomId'                 => 'RoomId',
        'roomOwnerId'            => 'RoomOwnerId',
        'templateId'             => 'TemplateId',
        'title'                  => 'Title',
        'uv'                     => 'Uv',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
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
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->roomOwnerId) {
            $res['RoomOwnerId'] = $this->roomOwnerId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roomInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
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
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RoomOwnerId'])) {
            $model->roomOwnerId = $map['RoomOwnerId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }

        return $model;
    }
}
