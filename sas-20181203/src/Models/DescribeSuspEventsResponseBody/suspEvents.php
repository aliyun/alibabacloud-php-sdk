<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents\details;
use AlibabaCloud\Tea\Model;

class suspEvents extends Model
{
    /**
     * @var string
     */
    public $stages;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $k8sClusterName;

    /**
     * @var string
     */
    public $containerImageId;

    /**
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @var string
     */
    public $occurrenceTime;

    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var details[]
     */
    public $details;

    /**
     * @var bool
     */
    public $canCancelFault;

    /**
     * @var string
     */
    public $alarmEventNameDisplay;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $securityEventIds;

    /**
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @var string
     */
    public $markMisRules;

    /**
     * @var string
     */
    public $containerImageName;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var bool
     */
    public $containHwMode;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $k8sNodeId;

    /**
     * @var int
     */
    public $eventStatus;

    /**
     * @var string
     */
    public $saleVersion;

    /**
     * @var string
     */
    public $operateErrorCode;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $hasTraceInfo;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $eventSubType;

    /**
     * @var bool
     */
    public $advanced;

    /**
     * @var int
     */
    public $occurrenceTimeStamp;

    /**
     * @var string
     */
    public $alarmEventTypeDisplay;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $lastTime;

    /**
     * @var string
     */
    public $operateMsg;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $k8sPodName;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $alarmEventType;

    /**
     * @var string
     */
    public $k8sNamespace;

    /**
     * @var bool
     */
    public $autoBreaking;

    /**
     * @var string
     */
    public $k8sNodeName;

    /**
     * @var string
     */
    public $alarmEventName;

    /**
     * @var string
     */
    public $uniqueInfo;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'stages'                => 'Stages',
        'internetIp'            => 'InternetIp',
        'k8sClusterName'        => 'K8sClusterName',
        'containerImageId'      => 'ContainerImageId',
        'lastTimeStamp'         => 'LastTimeStamp',
        'occurrenceTime'        => 'OccurrenceTime',
        'alarmUniqueInfo'       => 'AlarmUniqueInfo',
        'desc'                  => 'Desc',
        'details'               => 'Details',
        'canCancelFault'        => 'CanCancelFault',
        'alarmEventNameDisplay' => 'AlarmEventNameDisplay',
        'appName'               => 'AppName',
        'securityEventIds'      => 'SecurityEventIds',
        'canBeDealOnLine'       => 'CanBeDealOnLine',
        'markMisRules'          => 'MarkMisRules',
        'containerImageName'    => 'ContainerImageName',
        'k8sClusterId'          => 'K8sClusterId',
        'containHwMode'         => 'ContainHwMode',
        'instanceName'          => 'InstanceName',
        'k8sNodeId'             => 'K8sNodeId',
        'eventStatus'           => 'EventStatus',
        'saleVersion'           => 'SaleVersion',
        'operateErrorCode'      => 'OperateErrorCode',
        'name'                  => 'Name',
        'hasTraceInfo'          => 'HasTraceInfo',
        'dataSource'            => 'DataSource',
        'operateTime'           => 'OperateTime',
        'eventSubType'          => 'EventSubType',
        'advanced'              => 'Advanced',
        'occurrenceTimeStamp'   => 'OccurrenceTimeStamp',
        'alarmEventTypeDisplay' => 'AlarmEventTypeDisplay',
        'intranetIp'            => 'IntranetIp',
        'lastTime'              => 'LastTime',
        'operateMsg'            => 'OperateMsg',
        'uuid'                  => 'Uuid',
        'k8sPodName'            => 'K8sPodName',
        'containerId'           => 'ContainerId',
        'alarmEventType'        => 'AlarmEventType',
        'k8sNamespace'          => 'K8sNamespace',
        'autoBreaking'          => 'AutoBreaking',
        'k8sNodeName'           => 'K8sNodeName',
        'alarmEventName'        => 'AlarmEventName',
        'uniqueInfo'            => 'UniqueInfo',
        'level'                 => 'Level',
        'id'                    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stages) {
            $res['Stages'] = $this->stages;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->k8sClusterName) {
            $res['K8sClusterName'] = $this->k8sClusterName;
        }
        if (null !== $this->containerImageId) {
            $res['ContainerImageId'] = $this->containerImageId;
        }
        if (null !== $this->lastTimeStamp) {
            $res['LastTimeStamp'] = $this->lastTimeStamp;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
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
        if (null !== $this->canCancelFault) {
            $res['CanCancelFault'] = $this->canCancelFault;
        }
        if (null !== $this->alarmEventNameDisplay) {
            $res['AlarmEventNameDisplay'] = $this->alarmEventNameDisplay;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->markMisRules) {
            $res['MarkMisRules'] = $this->markMisRules;
        }
        if (null !== $this->containerImageName) {
            $res['ContainerImageName'] = $this->containerImageName;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->containHwMode) {
            $res['ContainHwMode'] = $this->containHwMode;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->k8sNodeId) {
            $res['K8sNodeId'] = $this->k8sNodeId;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->hasTraceInfo) {
            $res['HasTraceInfo'] = $this->hasTraceInfo;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->eventSubType) {
            $res['EventSubType'] = $this->eventSubType;
        }
        if (null !== $this->advanced) {
            $res['Advanced'] = $this->advanced;
        }
        if (null !== $this->occurrenceTimeStamp) {
            $res['OccurrenceTimeStamp'] = $this->occurrenceTimeStamp;
        }
        if (null !== $this->alarmEventTypeDisplay) {
            $res['AlarmEventTypeDisplay'] = $this->alarmEventTypeDisplay;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->operateMsg) {
            $res['OperateMsg'] = $this->operateMsg;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->k8sPodName) {
            $res['K8sPodName'] = $this->k8sPodName;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->alarmEventType) {
            $res['AlarmEventType'] = $this->alarmEventType;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->autoBreaking) {
            $res['AutoBreaking'] = $this->autoBreaking;
        }
        if (null !== $this->k8sNodeName) {
            $res['K8sNodeName'] = $this->k8sNodeName;
        }
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }
        if (null !== $this->uniqueInfo) {
            $res['UniqueInfo'] = $this->uniqueInfo;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Stages'])) {
            $model->stages = $map['Stages'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['K8sClusterName'])) {
            $model->k8sClusterName = $map['K8sClusterName'];
        }
        if (isset($map['ContainerImageId'])) {
            $model->containerImageId = $map['ContainerImageId'];
        }
        if (isset($map['LastTimeStamp'])) {
            $model->lastTimeStamp = $map['LastTimeStamp'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
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
        if (isset($map['CanCancelFault'])) {
            $model->canCancelFault = $map['CanCancelFault'];
        }
        if (isset($map['AlarmEventNameDisplay'])) {
            $model->alarmEventNameDisplay = $map['AlarmEventNameDisplay'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['SecurityEventIds'])) {
            $model->securityEventIds = $map['SecurityEventIds'];
        }
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['MarkMisRules'])) {
            $model->markMisRules = $map['MarkMisRules'];
        }
        if (isset($map['ContainerImageName'])) {
            $model->containerImageName = $map['ContainerImageName'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['ContainHwMode'])) {
            $model->containHwMode = $map['ContainHwMode'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['K8sNodeId'])) {
            $model->k8sNodeId = $map['K8sNodeId'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HasTraceInfo'])) {
            $model->hasTraceInfo = $map['HasTraceInfo'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['EventSubType'])) {
            $model->eventSubType = $map['EventSubType'];
        }
        if (isset($map['Advanced'])) {
            $model->advanced = $map['Advanced'];
        }
        if (isset($map['OccurrenceTimeStamp'])) {
            $model->occurrenceTimeStamp = $map['OccurrenceTimeStamp'];
        }
        if (isset($map['AlarmEventTypeDisplay'])) {
            $model->alarmEventTypeDisplay = $map['AlarmEventTypeDisplay'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['OperateMsg'])) {
            $model->operateMsg = $map['OperateMsg'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['K8sPodName'])) {
            $model->k8sPodName = $map['K8sPodName'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['AlarmEventType'])) {
            $model->alarmEventType = $map['AlarmEventType'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['AutoBreaking'])) {
            $model->autoBreaking = $map['AutoBreaking'];
        }
        if (isset($map['K8sNodeName'])) {
            $model->k8sNodeName = $map['K8sNodeName'];
        }
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['UniqueInfo'])) {
            $model->uniqueInfo = $map['UniqueInfo'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
