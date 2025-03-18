<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RunNotifyComponentWithMessageCenterRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example notifyByMessageCenter
     *
     * @var string
     */
    public $actionName;

    /**
     * @description This parameter is required.
     *
     * @example 146789xxxx733152
     *
     * @var string
     */
    public $aliuid;

    /**
     * @example 1
     *
     * @var int
     */
    public $assetId;

    /**
     * @var string[]
     */
    public $channelTypeList;

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
     * @example yundun_soar_incident_generate
     *
     * @var string
     */
    public $eventId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is required.
     *
     * @example notify_message
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example {"startTime":"test222","incidentName":"test123","incidentID":"teset123"}
     *
     * @var string
     */
    public $params;

    /**
     * @description This parameter is required.
     *
     * @example c5c88b5e-97ca-435d-8c20-xxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example 1467894xxx733152
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
    protected $_name = [
        'actionName' => 'ActionName',
        'aliuid' => 'Aliuid',
        'assetId' => 'AssetId',
        'channelTypeList' => 'ChannelTypeList',
        'componentName' => 'ComponentName',
        'eventId' => 'EventId',
        'lang' => 'Lang',
        'nodeName' => 'NodeName',
        'params' => 'Params',
        'playbookUuid' => 'PlaybookUuid',
        'roleFor' => 'RoleFor',
        'roleType' => 'RoleType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }
        if (null !== $this->assetId) {
            $res['AssetId'] = $this->assetId;
        }
        if (null !== $this->channelTypeList) {
            $res['ChannelTypeList'] = $this->channelTypeList;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunNotifyComponentWithMessageCenterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }
        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }
        if (isset($map['ChannelTypeList'])) {
            if (!empty($map['ChannelTypeList'])) {
                $model->channelTypeList = $map['ChannelTypeList'];
            }
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
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

        return $model;
    }
}
