<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\CreateRoomRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 租户名
     *
     * @var string
     */
    public $domain;

    /**
     * @description 业务类型
     *
     * @var string
     */
    public $bizType;

    /**
     * @description 模板id
     *
     * @var string
     */
    public $templateId;

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
     * @description 拓展字段
     *
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'domain'     => 'Domain',
        'bizType'    => 'BizType',
        'templateId' => 'TemplateId',
        'roomId'     => 'RoomId',
        'title'      => 'Title',
        'notice'     => 'Notice',
        'ownerId'    => 'OwnerId',
        'extension'  => 'Extension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
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
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
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
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        return $model;
    }
}
