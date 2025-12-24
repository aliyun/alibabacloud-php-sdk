<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class RunNotifyComponentWithMessageCenterRequest extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $aliuid;

    /**
     * @var string
     */
    public $assetId;

    /**
     * @var string[]
     */
    public $channelTypeList;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $params;

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

    public function validate()
    {
        if (\is_array($this->channelTypeList)) {
            Model::validateArray($this->channelTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->channelTypeList)) {
                $res['ChannelTypeList'] = [];
                $n1 = 0;
                foreach ($this->channelTypeList as $item1) {
                    $res['ChannelTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['AssetId'])) {
            $model->assetId = $map['AssetId'];
        }

        if (isset($map['ChannelTypeList'])) {
            if (!empty($map['ChannelTypeList'])) {
                $model->channelTypeList = [];
                $n1 = 0;
                foreach ($map['ChannelTypeList'] as $item1) {
                    $model->channelTypeList[$n1] = $item1;
                    ++$n1;
                }
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
