<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponseBody\data\causeDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $type;

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
     * @var string
     */
    public $alarmEventDesc;

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
    public $solution;

    /**
     * @var string
     */
    public $dataSource;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $alarmEventAliasName;

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
    public $containerId;

    /**
     * @var string
     */
    public $k8sPodName;

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
    public $level;

    /**
     * @var causeDetails[]
     */
    public $causeDetails;
    protected $_name = [
        'type'                => 'Type',
        'internetIp'          => 'InternetIp',
        'k8sClusterName'      => 'K8sClusterName',
        'containerImageId'    => 'ContainerImageId',
        'alarmEventDesc'      => 'AlarmEventDesc',
        'alarmUniqueInfo'     => 'AlarmUniqueInfo',
        'canCancelFault'      => 'CanCancelFault',
        'appName'             => 'AppName',
        'canBeDealOnLine'     => 'CanBeDealOnLine',
        'containerImageName'  => 'ContainerImageName',
        'k8sClusterId'        => 'K8sClusterId',
        'containHwMode'       => 'ContainHwMode',
        'instanceName'        => 'InstanceName',
        'k8sNodeId'           => 'K8sNodeId',
        'solution'            => 'Solution',
        'dataSource'          => 'DataSource',
        'intranetIp'          => 'IntranetIp',
        'alarmEventAliasName' => 'AlarmEventAliasName',
        'endTime'             => 'EndTime',
        'uuid'                => 'Uuid',
        'startTime'           => 'StartTime',
        'containerId'         => 'ContainerId',
        'k8sPodName'          => 'K8sPodName',
        'k8sNamespace'        => 'K8sNamespace',
        'k8sNodeName'         => 'K8sNodeName',
        'level'               => 'Level',
        'causeDetails'        => 'CauseDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (null !== $this->alarmEventDesc) {
            $res['AlarmEventDesc'] = $this->alarmEventDesc;
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
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
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
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->alarmEventAliasName) {
            $res['AlarmEventAliasName'] = $this->alarmEventAliasName;
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
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->k8sPodName) {
            $res['K8sPodName'] = $this->k8sPodName;
        }
        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }
        if (null !== $this->k8sNodeName) {
            $res['K8sNodeName'] = $this->k8sNodeName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->causeDetails) {
            $res['CauseDetails'] = [];
            if (null !== $this->causeDetails && \is_array($this->causeDetails)) {
                $n = 0;
                foreach ($this->causeDetails as $item) {
                    $res['CauseDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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
        if (isset($map['AlarmEventDesc'])) {
            $model->alarmEventDesc = $map['AlarmEventDesc'];
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
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
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
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['AlarmEventAliasName'])) {
            $model->alarmEventAliasName = $map['AlarmEventAliasName'];
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
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['K8sPodName'])) {
            $model->k8sPodName = $map['K8sPodName'];
        }
        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }
        if (isset($map['K8sNodeName'])) {
            $model->k8sNodeName = $map['K8sNodeName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['CauseDetails'])) {
            if (!empty($map['CauseDetails'])) {
                $model->causeDetails = [];
                $n                   = 0;
                foreach ($map['CauseDetails'] as $item) {
                    $model->causeDetails[$n++] = null !== $item ? causeDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
