<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents\details;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents\eventNotes;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents\tacticItems;
use AlibabaCloud\Tea\Model;

class suspEvents extends Model
{
    /**
     * @var bool
     */
    public $advanced;

    /**
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $alarmEventNameDisplay;

    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @var string
     */
    public $alarmEventTypeDisplay;

    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var bool
     */
    public $autoBreaking;

    /**
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @var bool
     */
    public $canCancelFault;

    /**
     * @var bool
     */
    public $containHwMode;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $containerImageId;

    /**
     * @var string
     */
    public $containerImageName;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var eventNotes[]
     */
    public $eventNotes;

    /**
     * @var int
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $eventSubType;

    /**
     * @var bool
     */
    public $hasTraceInfo;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $k8sClusterName;

    /**
     * @var string
     */
    public $k8sNamespace;

    /**
     * @var string
     */
    public $k8sNodeId;

    /**
     * @var string
     */
    public $k8sNodeName;

    /**
     * @var string
     */
    public $k8sPodName;

    /**
     * @var string
     */
    public $lastTime;

    /**
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $markMisRules;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $occurrenceTime;

    /**
     * @var int
     */
    public $occurrenceTimeStamp;

    /**
     * @var string
     */
    public $operateErrorCode;

    /**
     * @var string
     */
    public $operateMsg;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $saleVersion;

    /**
     * @var string
     */
    public $securityEventIds;

    /**
     * @var string
     */
    public $stages;

    /**
     * @description 攻击阶段展示名
     *
     * @var tacticItems[]
     */
    public $tacticItems;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'advanced'              => 'Advanced',
        'alarmEventName'        => 'AlarmEventName',
        'alarmEventNameDisplay' => 'AlarmEventNameDisplay',
        'alarmEventType'        => 'AlarmEventType',
        'alarmEventTypeDisplay' => 'AlarmEventTypeDisplay',
        'alarmUniqueInfo'       => 'AlarmUniqueInfo',
        'appName'               => 'AppName',
        'autoBreaking'          => 'AutoBreaking',
        'canBeDealOnLine'       => 'CanBeDealOnLine',
        'canCancelFault'        => 'CanCancelFault',
        'containHwMode'         => 'ContainHwMode',
        'containerId'           => 'ContainerId',
        'containerImageId'      => 'ContainerImageId',
        'containerImageName'    => 'ContainerImageName',
        'dataSource'            => 'DataSource',
        'desc'                  => 'Desc',
        'details'               => 'Details',
        'eventNotes'            => 'EventNotes',
        'eventStatus'           => 'EventStatus',
        'eventSubType'          => 'EventSubType',
        'hasTraceInfo'          => 'HasTraceInfo',
        'id'                    => 'Id',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'internetIp'            => 'InternetIp',
        'intranetIp'            => 'IntranetIp',
        'k8sClusterId'          => 'K8sClusterId',
        'k8sClusterName'        => 'K8sClusterName',
        'k8sNamespace'          => 'K8sNamespace',
        'k8sNodeId'             => 'K8sNodeId',
        'k8sNodeName'           => 'K8sNodeName',
        'k8sPodName'            => 'K8sPodName',
        'lastTime'              => 'LastTime',
        'lastTimeStamp'         => 'LastTimeStamp',
        'level'                 => 'Level',
        'markMisRules'          => 'MarkMisRules',
        'name'                  => 'Name',
        'occurrenceTime'        => 'OccurrenceTime',
        'occurrenceTimeStamp'   => 'OccurrenceTimeStamp',
        'operateErrorCode'      => 'OperateErrorCode',
        'operateMsg'            => 'OperateMsg',
        'operateTime'           => 'OperateTime',
        'saleVersion'           => 'SaleVersion',
        'securityEventIds'      => 'SecurityEventIds',
        'stages'                => 'Stages',
        'tacticItems'           => 'TacticItems',
        'uniqueInfo'            => 'UniqueInfo',
        'uuid'                  => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advanced) {
            $res['Advanced'] = $this->advanced;
        }
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }
        if (null !== $this->alarmEventNameDisplay) {
            $res['AlarmEventNameDisplay'] = $this->alarmEventNameDisplay;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->alarmEventTypeDisplay) {
            $res['AlarmEventTypeDisplay'] = $this->alarmEventTypeDisplay;
        }
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->autoBreaking) {
            $res['AutoBreaking'] = $this->autoBreaking;
        }
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->canCancelFault) {
            $res['CanCancelFault'] = $this->canCancelFault;
        }
        if (null !== $this->containHwMode) {
            $res['ContainHwMode'] = $this->containHwMode;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerImageId) {
            $res['ContainerImageId'] = $this->containerImageId;
        }
        if (null !== $this->containerImageName) {
            $res['ContainerImageName'] = $this->containerImageName;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->details) {
            $res['Details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventNotes) {
            $res['EventNotes'] = [];
            if (null !== $this->eventNotes && \is_array($this->eventNotes)) {
                $n = 0;
                foreach ($this->eventNotes as $item) {
                    $res['EventNotes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventSubType) {
            $res['EventSubType'] = $this->eventSubType;
        }
        if (null !== $this->hasTraceInfo) {
            $res['HasTraceInfo'] = $this->hasTraceInfo;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->k8sClusterName) {
            $res['K8sClusterName'] = $this->k8sClusterName;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->k8sNodeId) {
            $res['K8sNodeId'] = $this->k8sNodeId;
        }
        if (null !== $this->k8sNodeName) {
            $res['K8sNodeName'] = $this->k8sNodeName;
        }
        if (null !== $this->k8sPodName) {
            $res['K8sPodName'] = $this->k8sPodName;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->markMisRules) {
            $res['MarkMisRules'] = $this->markMisRules;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->occurrenceTimeStamp) {
            $res['OccurrenceTimeStamp'] = $this->occurrenceTimeStamp;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->operateMsg) {
            $res['OperateMsg'] = $this->operateMsg;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }
        if (null !== $this->stages) {
            $res['Stages'] = $this->stages;
        }
        if (null !== $this->tacticItems) {
            $res['TacticItems'] = [];
            if (null !== $this->tacticItems && \is_array($this->tacticItems)) {
                $n = 0;
                foreach ($this->tacticItems as $item) {
                    $res['TacticItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suspEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advanced'])) {
            $model->advanced = $map['Advanced'];
        }
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['AlarmEventNameDisplay'])) {
            $model->alarmEventNameDisplay = $map['AlarmEventNameDisplay'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['AlarmEventTypeDisplay'])) {
            $model->alarmEventTypeDisplay = $map['AlarmEventTypeDisplay'];
        }
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AutoBreaking'])) {
            $model->autoBreaking = $map['AutoBreaking'];
        }
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['CanCancelFault'])) {
            $model->canCancelFault = $map['CanCancelFault'];
        }
        if (isset($map['ContainHwMode'])) {
            $model->containHwMode = $map['ContainHwMode'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerImageId'])) {
            $model->containerImageId = $map['ContainerImageId'];
        }
        if (isset($map['ContainerImageName'])) {
            $model->containerImageName = $map['ContainerImageName'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventNotes'])) {
            if (!empty($map['EventNotes'])) {
                $model->eventNotes = [];
                $n                 = 0;
                foreach ($map['EventNotes'] as $item) {
                    $model->eventNotes[$n++] = null !== $item ? eventNotes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventSubType'])) {
            $model->eventSubType = $map['EventSubType'];
        }
        if (isset($map['HasTraceInfo'])) {
            $model->hasTraceInfo = $map['HasTraceInfo'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['K8sClusterName'])) {
            $model->k8sClusterName = $map['K8sClusterName'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['K8sNodeId'])) {
            $model->k8sNodeId = $map['K8sNodeId'];
        }
        if (isset($map['K8sNodeName'])) {
            $model->k8sNodeName = $map['K8sNodeName'];
        }
        if (isset($map['K8sPodName'])) {
            $model->k8sPodName = $map['K8sPodName'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['LastTimeStamp'])) {
            $model->lastTimeStamp = $map['LastTimeStamp'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MarkMisRules'])) {
            $model->markMisRules = $map['MarkMisRules'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['OccurrenceTimeStamp'])) {
            $model->occurrenceTimeStamp = $map['OccurrenceTimeStamp'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['OperateMsg'])) {
            $model->operateMsg = $map['OperateMsg'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['SecurityEventIds'])) {
            $model->securityEventIds = $map['SecurityEventIds'];
        }
        if (isset($map['Stages'])) {
            $model->stages = $map['Stages'];
        }
        if (isset($map['TacticItems'])) {
            if (!empty($map['TacticItems'])) {
                $model->tacticItems = [];
                $n                  = 0;
                foreach ($map['TacticItems'] as $item) {
                    $model->tacticItems[$n++] = null !== $item ? tacticItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
