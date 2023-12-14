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
     * @description Indicates whether the alert event was analyzed offline.
     *
     * @example true
     *
     * @var bool
     */
    public $advanced;

    /**
     * @description The name of the alert event.
     *
     * @example login_common_location
     *
     * @var string
     */
    public $alarmEventName;

    /**
     * @description The name of the alert.
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $alarmEventNameDisplay;

    /**
     * @description The type of the alert event.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $alarmEventType;

    /**
     * @description The display name of the type of the alert event.
     *
     * @example Unusual Logon
     *
     * @var string
     */
    public $alarmEventTypeDisplay;

    /**
     * @description The unique ID of the alert event.
     *
     * @example 8df914418f****
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @description The name of the application to which the alert event belongs.
     *
     * @example pro-deploy-tibasic
     *
     * @var string
     */
    public $appName;

    /**
     * @description Indicates whether automatic defense is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $autoBreaking;

    /**
     * @description Indicates whether you can handle the alert event online, such as quarantining the source file of the malicious process. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @description Indicates whether you can cancel marking the alert event as a false positive. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $canCancelFault;

    /**
     * @description Indicates whether the safeguard mode for major activities is enabled for the server. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $containHwMode;

    /**
     * @description The ID of the container.
     *
     * @example container_1648601865161_14925_02_000****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The ID of the image to which the container belongs.
     *
     * @example sha256:2e5a3b0ae5f452b3cb458789a9a7542ef40035a84318469a8528c5e444db1****
     *
     * @var string
     */
    public $containerImageId;

    /**
     * @description The name of the image to which the container belongs.
     *
     * @example centos7_apache:v1.0.1
     *
     * @var string
     */
    public $containerImageName;

    /**
     * @description The source of data. This parameter can be ignored.
     *
     * @example aegis_suspicious_****
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The impact of the alert event.
     *
     * @example webshell
     *
     * @var string
     */
    public $desc;

    /**
     * @description The details of the alert event.
     *
     * @var details[]
     */
    public $details;

    /**
     * @description Indicates whether the alert event can be detected by cloud sandbox. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $displaySandboxResult;

    /**
     * @description The note information about the alert event.
     *
     * @var eventNotes[]
     */
    public $eventNotes;

    /**
     * @description The status of the alert event. Valid values:
     *
     *   **1**: pending handling
     *   **2**: ignored
     *   **4**: confirmed
     *   **8**: marked as a false positive
     *   **16**: handling
     *   **32**: handled
     *   **64**: expired
     *
     * @example 1
     *
     * @var int
     */
    public $eventStatus;

    /**
     * @description The subtype of the alert event.
     *
     * @example login_common_location
     *
     * @var string
     */
    public $eventSubType;

    /**
     * @description Indicates whether the alert event has tracing information. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasTraceInfo;

    /**
     * @description The unique ID of the alert event.
     *
     * @example 1000
     *
     * @var int
     */
    public $id;

    /**
     * @description The UUID of the image.
     *
     * @example 70489fb520cea585ad9761d5a842****
     *
     * @var string
     */
    public $imageUuid;

    /**
     * @description The ID of the affected asset.
     *
     * @example i-9dp6dwsxdl9z5u1e2f****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the associated instance.
     *
     * @example nginx
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address that is associated with instance.
     *
     * @example 1.2.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the associated instance.
     *
     * @example 100.100.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The ID of the Kubernetes cluster.
     *
     * @example c517b37e1401e4961b3951863a49a****
     *
     * @var string
     */
    public $k8sClusterId;

    /**
     * @description The name of the Kubernetes cluster.
     *
     * @example k8s-daily
     *
     * @var string
     */
    public $k8sClusterName;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $k8sNamespace;

    /**
     * @description The ID of the Kubernetes node.
     *
     * @example i-bp14a1ay8e0aa9t0****
     *
     * @var string
     */
    public $k8sNodeId;

    /**
     * @description The name of the Kubernetes node.
     *
     * @example N/A
     *
     * @var string
     */
    public $k8sNodeName;

    /**
     * @description The name of the Kubernetes pod.
     *
     * @example myapp-pod
     *
     * @var string
     */
    public $k8sPodName;

    /**
     * @description Indicates whether the large model analysis tag is supported. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $largeModel;

    /**
     * @description The time when the alert event was last detected.
     *
     * @example 2018-09-26 01:51:01
     *
     * @var string
     */
    public $lastTime;

    /**
     * @description The timestamp when the alert event was last detected. Unit: milliseconds.
     *
     * @example 1631699497000
     *
     * @var int
     */
    public $lastTimeStamp;

    /**
     * @description The severity of the alert event. Valid values:
     *
     *   **serious**
     *   **suspicious**
     *   **remind**
     *
     * @example serious
     *
     * @var string
     */
    public $level;

    /**
     * @description The status of the malicious behavior defense rule. Valid values:
     *
     *   **open**
     *   **close**
     *
     * @example open
     *
     * @var string
     */
    public $maliciousRuleStatus;

    /**
     * @description The advanced whitelist rule.
     *
     * @example [{\"uuid\":\"ALL\",\"field\":\"gmtModified\",\"operate\":\"contains\",\"fieldValue\":\"222\"}]
     *
     * @var string
     */
    public $markMisRules;

    /**
     * @description The complete name of the alert event.
     *
     * @example Unusual Logon-Login with unusual location
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the alert event was first detected.
     *
     * @example 2018-09-26 01:51:01
     *
     * @var string
     */
    public $occurrenceTime;

    /**
     * @description The timestamp when the alert event was first detected. Unit: milliseconds.
     *
     * @example 1631699497000
     *
     * @var int
     */
    public $occurrenceTimeStamp;

    /**
     * @description The handling result code of the alert event.
     *
     * @example kill_and_quara.Success
     *
     * @var string
     */
    public $operateErrorCode;

    /**
     * @description The handing result message of the alert event.
     *
     * @example success
     *
     * @var string
     */
    public $operateMsg;

    /**
     * @description The handling timestamp of the alert event. Unit: milliseconds.
     *
     * @example 1631699497000
     *
     * @var int
     */
    public $operateTime;

    /**
     * @description The edition of Security Center in which the alert event can be detected. Valid values:
     *
     *   **0**: Basic edition
     *   **1**: Enterprise edition
     *
     * @example 1
     *
     * @var string
     */
    public $saleVersion;

    /**
     * @description The ID of the associated alert event.
     *
     * @example 270789
     *
     * @var string
     */
    public $securityEventIds;

    /**
     * @description The stage at which the attack is detected.
     *
     * @example "["authority_maintenance"]"
     *
     * @var string
     */
    public $stages;

    /**
     * @description The display name of the attack stage.
     *
     * @var tacticItems[]
     */
    public $tacticItems;

    /**
     * @description The unique key of the alert.
     *
     * @example e17e****
     *
     * @var string
     */
    public $uniqueInfo;

    /**
     * @description The unique ID of the associated instance.
     *
     * @example bf6b30d3-eea8-4924-9f0a-****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the cluster.
     *
     * @example c2051775877374cccbf68af596e6****
     *
     * @var string
     */
    public $clusterId;
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
        'displaySandboxResult'  => 'DisplaySandboxResult',
        'eventNotes'            => 'EventNotes',
        'eventStatus'           => 'EventStatus',
        'eventSubType'          => 'EventSubType',
        'hasTraceInfo'          => 'HasTraceInfo',
        'id'                    => 'Id',
        'imageUuid'             => 'ImageUuid',
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
        'largeModel'            => 'LargeModel',
        'lastTime'              => 'LastTime',
        'lastTimeStamp'         => 'LastTimeStamp',
        'level'                 => 'Level',
        'maliciousRuleStatus'   => 'MaliciousRuleStatus',
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
        'clusterId'             => 'clusterId',
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
        if (null !== $this->displaySandboxResult) {
            $res['DisplaySandboxResult'] = $this->displaySandboxResult;
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
        if (null !== $this->imageUuid) {
            $res['ImageUuid'] = $this->imageUuid;
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
        if (null !== $this->largeModel) {
            $res['LargeModel'] = $this->largeModel;
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
        if (null !== $this->maliciousRuleStatus) {
            $res['MaliciousRuleStatus'] = $this->maliciousRuleStatus;
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
        if (null !== $this->clusterId) {
            $res['clusterId'] = $this->clusterId;
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
        if (isset($map['DisplaySandboxResult'])) {
            $model->displaySandboxResult = $map['DisplaySandboxResult'];
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
        if (isset($map['ImageUuid'])) {
            $model->imageUuid = $map['ImageUuid'];
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
        if (isset($map['LargeModel'])) {
            $model->largeModel = $map['LargeModel'];
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
        if (isset($map['MaliciousRuleStatus'])) {
            $model->maliciousRuleStatus = $map['MaliciousRuleStatus'];
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
        if (isset($map['clusterId'])) {
            $model->clusterId = $map['clusterId'];
        }

        return $model;
    }
}
