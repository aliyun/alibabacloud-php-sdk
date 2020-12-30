<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventListResponseBody;

use AlibabaCloud\Tea\Model;

class suspEvents extends Model
{
    /**
     * @var bool
     */
    public $dealed;

    /**
     * @var string
     */
    public $stages;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var int
     */
    public $suspiciousEventCount;

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
    public $gmtModified;

    /**
     * @var string
     */
    public $alarmEventNameOriginal;

    /**
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @var bool
     */
    public $canCancelFault;

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
    public $containerImageName;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $description;

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
    public $solution;

    /**
     * @var bool
     */
    public $hasTraceInfo;

    /**
     * @var int
     */
    public $operateTime;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var int
     */
    public $startTime;

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
    public $level;
    protected $_name = [
        'dealed'                 => 'Dealed',
        'stages'                 => 'Stages',
        'internetIp'             => 'InternetIp',
        'suspiciousEventCount'   => 'SuspiciousEventCount',
        'k8sClusterName'         => 'K8sClusterName',
        'containerImageId'       => 'ContainerImageId',
        'gmtModified'            => 'GmtModified',
        'alarmEventNameOriginal' => 'AlarmEventNameOriginal',
        'alarmUniqueInfo'        => 'AlarmUniqueInfo',
        'canCancelFault'         => 'CanCancelFault',
        'appName'                => 'AppName',
        'securityEventIds'       => 'SecurityEventIds',
        'canBeDealOnLine'        => 'CanBeDealOnLine',
        'containerImageName'     => 'ContainerImageName',
        'k8sClusterId'           => 'K8sClusterId',
        'description'            => 'Description',
        'containHwMode'          => 'ContainHwMode',
        'instanceName'           => 'InstanceName',
        'k8sNodeId'              => 'K8sNodeId',
        'saleVersion'            => 'SaleVersion',
        'operateErrorCode'       => 'OperateErrorCode',
        'solution'               => 'Solution',
        'hasTraceInfo'           => 'HasTraceInfo',
        'operateTime'            => 'OperateTime',
        'dataSource'             => 'DataSource',
        'instanceId'             => 'InstanceId',
        'intranetIp'             => 'IntranetIp',
        'endTime'                => 'EndTime',
        'uuid'                   => 'Uuid',
        'startTime'              => 'StartTime',
        'k8sPodName'             => 'K8sPodName',
        'containerId'            => 'ContainerId',
        'alarmEventType'         => 'AlarmEventType',
        'k8sNamespace'           => 'K8sNamespace',
        'k8sNodeName'            => 'K8sNodeName',
        'alarmEventName'         => 'AlarmEventName',
        'level'                  => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->stages) {
            $res['Stages'] = $this->stages;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->suspiciousEventCount) {
            $res['SuspiciousEventCount'] = $this->suspiciousEventCount;
        }
        if (null !== $this->k8sClusterName) {
            $res['K8sClusterName'] = $this->k8sClusterName;
        }
        if (null !== $this->containerImageId) {
            $res['ContainerImageId'] = $this->containerImageId;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->alarmEventNameOriginal) {
            $res['AlarmEventNameOriginal'] = $this->alarmEventNameOriginal;
        }
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->canCancelFault) {
            $res['CanCancelFault'] = $this->canCancelFault;
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
        if (null !== $this->containerImageName) {
            $res['ContainerImageName'] = $this->containerImageName;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (null !== $this->saleVersion) {
            $res['SaleVersion'] = $this->saleVersion;
        }
        if (null !== $this->operateErrorCode) {
            $res['OperateErrorCode'] = $this->operateErrorCode;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->hasTraceInfo) {
            $res['HasTraceInfo'] = $this->hasTraceInfo;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (null !== $this->k8sNodeName) {
            $res['K8sNodeName'] = $this->k8sNodeName;
        }
        if (null !== $this->alarmEventName) {
            $res['AlarmEventName'] = $this->alarmEventName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['Stages'])) {
            $model->stages = $map['Stages'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['SuspiciousEventCount'])) {
            $model->suspiciousEventCount = $map['SuspiciousEventCount'];
        }
        if (isset($map['K8sClusterName'])) {
            $model->k8sClusterName = $map['K8sClusterName'];
        }
        if (isset($map['ContainerImageId'])) {
            $model->containerImageId = $map['ContainerImageId'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['AlarmEventNameOriginal'])) {
            $model->alarmEventNameOriginal = $map['AlarmEventNameOriginal'];
        }
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['CanCancelFault'])) {
            $model->canCancelFault = $map['CanCancelFault'];
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
        if (isset($map['ContainerImageName'])) {
            $model->containerImageName = $map['ContainerImageName'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
        if (isset($map['SaleVersion'])) {
            $model->saleVersion = $map['SaleVersion'];
        }
        if (isset($map['OperateErrorCode'])) {
            $model->operateErrorCode = $map['OperateErrorCode'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['HasTraceInfo'])) {
            $model->hasTraceInfo = $map['HasTraceInfo'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
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
        if (isset($map['K8sNodeName'])) {
            $model->k8sNodeName = $map['K8sNodeName'];
        }
        if (isset($map['AlarmEventName'])) {
            $model->alarmEventName = $map['AlarmEventName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
