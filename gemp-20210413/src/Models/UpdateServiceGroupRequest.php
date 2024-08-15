<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\UpdateServiceGroupRequest\monitorSourceTemplates;
use AlibabaCloud\Tea\Model;

class UpdateServiceGroupRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example ENABLE
     *
     * @var string
     */
    public $enableWebhook;

    /**
     * @var monitorSourceTemplates[]
     */
    public $monitorSourceTemplates;

    /**
     * @example 飞车
     *
     * @var string
     */
    public $serviceGroupDescription;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 冲上云霄
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $userIds;

    /**
     * @description This parameter is required.
     *
     * @example wwwwwww
     *
     * @var string
     */
    public $webhookLink;

    /**
     * @description This parameter is required.
     *
     * @example WEIXINGROUP
     *
     * @var string
     */
    public $webhookType;
    protected $_name = [
        'clientToken'             => 'clientToken',
        'enableWebhook'           => 'enableWebhook',
        'monitorSourceTemplates'  => 'monitorSourceTemplates',
        'serviceGroupDescription' => 'serviceGroupDescription',
        'serviceGroupId'          => 'serviceGroupId',
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
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
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
     * @return UpdateServiceGroupRequest
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
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
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
