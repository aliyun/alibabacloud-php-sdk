<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RunNotifyComponentWithEmailRequest extends Model
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
     * @description This parameter is required.
     *
     * @example 10
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
     * @example email content
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
     * @example notify_message_1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description This parameter is required.
     *
     * @example e99dab31-499b-4307-9248-xxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $receivers;

    /**
     * @example 137602xxx718726
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
     * @description This parameter is required.
     *
     * @example title
     *
     * @var string
     */
    public $subject;
    protected $_name = [
        'actionName' => 'ActionName',
        'assetId' => 'AssetId',
        'componentName' => 'ComponentName',
        'content' => 'Content',
        'lang' => 'Lang',
        'nodeName' => 'NodeName',
        'playbookUuid' => 'PlaybookUuid',
        'receivers' => 'Receivers',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
        'subject' => 'Subject',
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
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->receivers) {
            $res['Receivers'] = $this->receivers;
        }
        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }
        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunNotifyComponentWithEmailRequest
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
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = $map['Receivers'];
            }
        }
        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }
        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        return $model;
    }
}
