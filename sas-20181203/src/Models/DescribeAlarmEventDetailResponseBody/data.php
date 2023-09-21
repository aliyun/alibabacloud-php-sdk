<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAlarmEventDetailResponseBody\data\causeDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the alert event.
     *
     * @example Login with unusual location
     *
     * @var string
     */
    public $alarmEventAliasName;

    /**
     * @description The description of the alert event.
     *
     * @example The detection model finds that self-mutation is running on your server. A self-mutation Trojan is a Trojan horse program with self-mutation function. It will change its hash or copy a large number of itself to different paths, and run in the background to avoid cleaning.
     *
     * @var string
     */
    public $alarmEventDesc;

    /**
     * @description The unique identifier of the alert event.
     *
     * > To query the details of an alert event, you must provide the unique identifier of the alert event. You can call the [DescribeSuspEvents](~~DescribeSuspEvents~~) operation to obtain the identifier.
     * @example 9f62555666f177aa84ee1eaf465a****
     *
     * @var string
     */
    public $alarmUniqueInfo;

    /**
     * @description The name of the container application.
     *
     * @example app:msdp-uat-service
     *
     * @var string
     */
    public $appName;

    /**
     * @description Indicates whether the online handling of the alert event is supported. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $canBeDealOnLine;

    /**
     * @description Indicates whether you can cancel marking the alert event as a false positive. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $canCancelFault;

    /**
     * @description An array consisting of the cause of the alert event, which can be used to trace the alert event.
     *
     * @var causeDetails[]
     */
    public $causeDetails;

    /**
     * @description Indicates whether the Safeguard Mode For Major Activities mode is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $containHwMode;

    /**
     * @description The ID of the container application.
     *
     * @example container_1606995441910_394868_01_000***
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The ID of the image to which the container belongs.
     *
     * @example cadb7a725641
     *
     * @var string
     */
    public $containerImageId;

    /**
     * @description The name of the image to which the container belongs.
     *
     * @example jenkins/jenkins:latest
     *
     * @var string
     */
    public $containerImageName;

    /**
     * @description The data source of the alert event.
     *
     * @example aegis_***
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The timestamp when the alert event ends. Unit: milliseconds.
     *
     * @example 1542366542000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the instance.
     *
     * @example i-wz92q7m5hsbgfhdss***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the associated instance.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the associated instance.
     *
     * @example 172.25.30.**
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @description The ID of the Kubernetes cluster.
     *
     * @example c562cf0d68e9749ee9fe544a7ab2f****
     *
     * @var string
     */
    public $k8sClusterId;

    /**
     * @description The name of the Kubernetes cluster.
     *
     * @example TestK8sCluser
     *
     * @var string
     */
    public $k8sClusterName;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example sit-saic-trip
     *
     * @var string
     */
    public $k8sNamespace;

    /**
     * @description The ID of the Kubernetes cluster node.
     *
     * @example i-bp14a1ay8e0aa9t0l***
     *
     * @var string
     */
    public $k8sNodeId;

    /**
     * @description The name of the Kubernetes cluster node.
     *
     * @example cn-hangzhou.10.188.139.**
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
     * @description The solution to the alert event.
     *
     * @example An invalid logon source IP has been detected. If you recognize this logon attempt, we recommend that you add the current logon source IP to the valid logon source IP list to avoid future alerts. If you do not recognize this logon attempt, we recommend that you modify the password.
     *
     * @var string
     */
    public $solution;

    /**
     * @description The timestamp when the alert event starts. Unit: milliseconds.
     *
     * @example 1542378601000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The alert type of the alert event. Valid values:
     *
     *   Suspicious process
     *   Webshell
     *   Unusual logon
     *   Exception
     *   Sensitive file tampering
     *   Malicious process (cloud threat detection)
     *   Suspicious network connection
     *   Other
     *   Abnormal account
     *   Application intrusion event
     *   Cloud threat detection
     *   Precise defense
     *   Application whitelist
     *   Persistent webshell
     *   Web application threat detection
     *   Malicious script
     *   Threat intelligence
     *   Malicious network activity
     *   Cluster exception
     *   Webshell (on-premises threat detection)
     *   Vulnerability exploitation
     *   Malicious process (on-premises threat detection)
     *   Trusted exception
     *
     * @example Webshell
     *
     * @var string
     */
    public $type;

    /**
     * @description The instance UUID of the asset.
     *
     * @example 6690a46c-0edb-4663-a641-3629d1a9****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alarmEventAliasName' => 'AlarmEventAliasName',
        'alarmEventDesc'      => 'AlarmEventDesc',
        'alarmUniqueInfo'     => 'AlarmUniqueInfo',
        'appName'             => 'AppName',
        'canBeDealOnLine'     => 'CanBeDealOnLine',
        'canCancelFault'      => 'CanCancelFault',
        'causeDetails'        => 'CauseDetails',
        'containHwMode'       => 'ContainHwMode',
        'containerId'         => 'ContainerId',
        'containerImageId'    => 'ContainerImageId',
        'containerImageName'  => 'ContainerImageName',
        'dataSource'          => 'DataSource',
        'endTime'             => 'EndTime',
        'instanceName'        => 'InstanceName',
        'internetIp'          => 'InternetIp',
        'intranetIp'          => 'IntranetIp',
        'k8sClusterId'        => 'K8sClusterId',
        'k8sClusterName'      => 'K8sClusterName',
        'k8sNamespace'        => 'K8sNamespace',
        'k8sNodeId'           => 'K8sNodeId',
        'k8sNodeName'         => 'K8sNodeName',
        'k8sPodName'          => 'K8sPodName',
        'level'               => 'Level',
        'solution'            => 'Solution',
        'startTime'           => 'StartTime',
        'type'                => 'Type',
        'uuid'                => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmEventAliasName) {
            $res['AlarmEventAliasName'] = $this->alarmEventAliasName;
        }
        if (null !== $this->alarmEventDesc) {
            $res['AlarmEventDesc'] = $this->alarmEventDesc;
        }
        if (null !== $this->alarmUniqueInfo) {
            $res['AlarmUniqueInfo'] = $this->alarmUniqueInfo;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->canBeDealOnLine) {
            $res['CanBeDealOnLine'] = $this->canBeDealOnLine;
        }
        if (null !== $this->canCancelFault) {
            $res['CanCancelFault'] = $this->canCancelFault;
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->solution) {
            $res['Solution'] = $this->solution;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlarmEventAliasName'])) {
            $model->alarmEventAliasName = $map['AlarmEventAliasName'];
        }
        if (isset($map['AlarmEventDesc'])) {
            $model->alarmEventDesc = $map['AlarmEventDesc'];
        }
        if (isset($map['AlarmUniqueInfo'])) {
            $model->alarmUniqueInfo = $map['AlarmUniqueInfo'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CanBeDealOnLine'])) {
            $model->canBeDealOnLine = $map['CanBeDealOnLine'];
        }
        if (isset($map['CanCancelFault'])) {
            $model->canCancelFault = $map['CanCancelFault'];
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Solution'])) {
            $model->solution = $map['Solution'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
