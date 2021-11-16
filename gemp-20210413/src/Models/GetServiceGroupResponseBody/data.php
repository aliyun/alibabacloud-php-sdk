<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupResponseBody;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetServiceGroupResponseBody\data\users;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description ENABLE 启用 DISABLE 禁用
     *
     * @var string
     */
    public $enableWebhook;

    /**
     * @description 服务组描述
     *
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @description 服务组ID
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description 服务组名称
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 用户ID
     *
     * @var users[]
     */
    public $users;

    /**
     * @description webhook 跳转地址
     *
     * @var string
     */
    public $webhookLink;

    /**
     * @description WEIXIN_GROUP 微信 DING_GROUP 钉钉 FEISHU_GROUP飞书
     *
     * @var string
     */
    public $webhookType;
    protected $_name = [
        'createTime'              => 'createTime',
        'enableWebhook'           => 'enableWebhook',
        'serviceGroupDescription' => 'serviceGroupDescription',
        'serviceGroupId'          => 'serviceGroupId',
        'serviceGroupName'        => 'serviceGroupName',
        'updateTime'              => 'updateTime',
        'users'                   => 'users',
        'webhookLink'             => 'webhookLink',
        'webhookType'             => 'webhookType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->enableWebhook) {
            $res['enableWebhook'] = $this->enableWebhook;
        }
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->users) {
            $res['users'] = [];
            if (null !== $this->users && \is_array($this->users)) {
                $n = 0;
                foreach ($this->users as $item) {
                    $res['users'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->webhookLink) {
            $res['webhookLink'] = $this->webhookLink;
        }
        if (null !== $this->webhookType) {
            $res['webhookType'] = $this->webhookType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['enableWebhook'])) {
            $model->enableWebhook = $map['enableWebhook'];
        }
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['users'])) {
            if (!empty($map['users'])) {
                $model->users = [];
                $n            = 0;
                foreach ($map['users'] as $item) {
                    $model->users[$n++] = null !== $item ? users::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['webhookLink'])) {
            $model->webhookLink = $map['webhookLink'];
        }
        if (isset($map['webhookType'])) {
            $model->webhookType = $map['webhookType'];
        }

        return $model;
    }
}
