<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\CreateServiceGroupRequest\monitorSourceTemplates;
use AlibabaCloud\Tea\Model;

class CreateServiceGroupRequest extends Model
{
    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description ENABLE 启用 DISABLE 禁用
     *
     * @var string
     */
    public $enableWebhook;

    /**
     * @description 监控源消息模版
     *
     * @var monitorSourceTemplates[]
     */
    public $monitorSourceTemplates;

    /**
     * @description 服务描述
     *
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @description 服务小组名称
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description 小组人员用户ID
     *
     * @var int[]
     */
    public $userIds;

    /**
     * @description webhookLink
     *
     * @var string
     */
    public $webhookLink;

    /**
     * @description WEIXIN_GROUP微信 DING_GROUP钉钉 FEISHU_GROUP飞书
     *
     * @var string
     */
    public $webhookType;
    protected $_name = [
        'clientToken'             => 'clientToken',
        'enableWebhook'           => 'enableWebhook',
        'monitorSourceTemplates'  => 'monitorSourceTemplates',
        'serviceGroupDescription' => 'serviceGroupDescription',
        'serviceGroupName'        => 'serviceGroupName',
        'userIds'                 => 'userIds',
        'webhookLink'             => 'webhookLink',
        'webhookType'             => 'webhookType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->enableWebhook) {
            $res['enableWebhook'] = $this->enableWebhook;
        }
        if (null !== $this->monitorSourceTemplates) {
            $res['monitorSourceTemplates'] = [];
            if (null !== $this->monitorSourceTemplates && \is_array($this->monitorSourceTemplates)) {
                $n = 0;
                foreach ($this->monitorSourceTemplates as $item) {
                    $res['monitorSourceTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceGroupDescription) {
            $res['serviceGroupDescription'] = $this->serviceGroupDescription;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
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
     * @return CreateServiceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['enableWebhook'])) {
            $model->enableWebhook = $map['enableWebhook'];
        }
        if (isset($map['monitorSourceTemplates'])) {
            if (!empty($map['monitorSourceTemplates'])) {
                $model->monitorSourceTemplates = [];
                $n                             = 0;
                foreach ($map['monitorSourceTemplates'] as $item) {
                    $model->monitorSourceTemplates[$n++] = null !== $item ? monitorSourceTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['serviceGroupDescription'])) {
            $model->serviceGroupDescription = $map['serviceGroupDescription'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = $map['userIds'];
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
