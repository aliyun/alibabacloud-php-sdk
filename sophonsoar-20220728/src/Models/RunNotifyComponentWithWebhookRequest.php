<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RunNotifyComponentWithWebhookRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example notifyByCustom
     *
     * @var string
     */
    public $actionName;

    /**
     * @example 1
     *
     * @var int
     */
    public $assetId;

    /**
     * @description This parameter is required.
     *
     * @example NotifyMessage
     *
     * @var string
     */
    public $componentName;

    /**
     * @description This parameter is required.
     *
     * @example {
     * "at": {
     * "atMobiles":[
     * "180xxxxxx"
     * ],
     * "atUserIds":[
     * "user123"
     * ],
     * "isAtAll": false
     * },
     * "text": {
     * "content":"1234"
     * },
     * "msgtype":"text"
     * }
     *
     * @var string
     */
    public $content;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example text
     *
     * @var string
     */
    public $msgType;

    /**
     * @description This parameter is required.
     *
     * @example notify_message_node
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description This parameter is required.
     *
     * @example 94bc318c-****-4cba-****-801ccb0d739f
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example 126339xxxx805497
     *
     * @var int
     */
    public $roleFor;

    /**
     * @example 0
     *
     * @var string
     */
    public $roleType;

    /**
     * @example SECc1*****e157b32b380f********bb8c70e1a67a22072
     *
     * @var string
     */
    public $secret;

    /**
     * @description This parameter is required.
     *
     * @example [\\"10651\\"]
     *
     * @var string
     */
    public $webhook;
    protected $_name = [
        'actionName' => 'ActionName',
        'assetId' => 'AssetId',
        'componentName' => 'ComponentName',
        'content' => 'Content',
        'lang' => 'Lang',
        'msgType' => 'MsgType',
        'nodeName' => 'NodeName',
        'playbookUuid' => 'PlaybookUuid',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'secret' => 'Secret',
        'webhook' => 'Webhook',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->msgType) {
            $res['MsgType'] = $this->msgType;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->secret) {
            $res['Secret'] = $this->secret;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunNotifyComponentWithWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MsgType'])) {
            $model->msgType = $map['MsgType'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['Secret'])) {
            $model->secret = $map['Secret'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
