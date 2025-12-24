<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class RunNotifyComponentWithWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $msgType;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $secret;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
