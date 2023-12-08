<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_\fixList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_\warningRiskList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The edition of Security Center that is authorized to protect the asset. Valid values:
     *
     *   **1**: Basic edition
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * @example 3
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description Indicates whether Security Center is authorized to protect the asset. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $bind;

    /**
     * @description The container ID.
     *
     * @example 48a6d9a92435a13ad573372c3f3c63b7e04d106458141df9f9215570********
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The name of the container.
     *
     * @example step-build-ui-build
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The details of the baselines for which the risk item can be fixed.
     *
     * @var fixList[]
     */
    public $fixList;

    /**
     * @var int
     */
    public $fixStatus;

    /**
     * @description The instance ID of the server.
     *
     * @example i-bp1a69mvjujbakxu****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example sql-test-0****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The public IP address of the affected asset.
     *
     * @example 8.210.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description The private IP address of the affected asset.
     *
     * @example 172.25.XX.XX
     *
     * @var string
     */
    public $intranetIp;

    /**
     * @var int
     */
    public $lastHandleTime;

    /**
     * @description The timestamp generated when the last scan was performed. Unit: milliseconds.
     *
     * @example 1694692471000
     *
     * @var int
     */
    public $lastScanTime;

    /**
     * @description Indicates whether a port on the server is accessible over the Internet. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $portOpen;

    /**
     * @description The prompt for the risk item.
     *
     * @example There is a weak password (username/password): root/he*****34
     *
     * @var string
     */
    public $prompt;

    /**
     * @description The region ID of the asset.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the check item. Valid values:
     *
     *   1: failed
     *   2: verifying
     *   3: passed
     *   6: ignored
     *   7: fixing
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the asset that is scanned.
     *
     * @example 30****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The name of the asset that is scanned.
     *
     * @example jenkins****
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **ECS_SNAPSHOT**
     *   **ECS_IMAGE**
     *
     * @example ECS_IMAGE
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The UUID of the server.
     *
     * @example 49e25e0f-bb51-4a5a-a1b3-13a4ddaa****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The information about the baselines on which the risk item is detected.
     *
     * @var warningRiskList[]
     */
    public $warningRiskList;
    protected $_name = [
        'authVersion'     => 'AuthVersion',
        'bind'            => 'Bind',
        'containerId'     => 'ContainerId',
        'containerName'   => 'ContainerName',
        'fixList'         => 'FixList',
        'fixStatus'       => 'FixStatus',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'internetIp'      => 'InternetIp',
        'intranetIp'      => 'IntranetIp',
        'lastHandleTime'  => 'LastHandleTime',
        'lastScanTime'    => 'LastScanTime',
        'portOpen'        => 'PortOpen',
        'prompt'          => 'Prompt',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'targetId'        => 'TargetId',
        'targetName'      => 'TargetName',
        'targetType'      => 'TargetType',
        'uuid'            => 'Uuid',
        'warningRiskList' => 'WarningRiskList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->bind) {
            $res['Bind'] = $this->bind;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->fixList) {
            $res['FixList'] = [];
            if (null !== $this->fixList && \is_array($this->fixList)) {
                $n = 0;
                foreach ($this->fixList as $item) {
                    $res['FixList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fixStatus) {
            $res['FixStatus'] = $this->fixStatus;
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
        if (null !== $this->lastHandleTime) {
            $res['LastHandleTime'] = $this->lastHandleTime;
        }
        if (null !== $this->lastScanTime) {
            $res['LastScanTime'] = $this->lastScanTime;
        }
        if (null !== $this->portOpen) {
            $res['PortOpen'] = $this->portOpen;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->warningRiskList) {
            $res['WarningRiskList'] = [];
            if (null !== $this->warningRiskList && \is_array($this->warningRiskList)) {
                $n = 0;
                foreach ($this->warningRiskList as $item) {
                    $res['WarningRiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Bind'])) {
            $model->bind = $map['Bind'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['FixList'])) {
            if (!empty($map['FixList'])) {
                $model->fixList = [];
                $n              = 0;
                foreach ($map['FixList'] as $item) {
                    $model->fixList[$n++] = null !== $item ? fixList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FixStatus'])) {
            $model->fixStatus = $map['FixStatus'];
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
        if (isset($map['LastHandleTime'])) {
            $model->lastHandleTime = $map['LastHandleTime'];
        }
        if (isset($map['LastScanTime'])) {
            $model->lastScanTime = $map['LastScanTime'];
        }
        if (isset($map['PortOpen'])) {
            $model->portOpen = $map['PortOpen'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['WarningRiskList'])) {
            if (!empty($map['WarningRiskList'])) {
                $model->warningRiskList = [];
                $n                      = 0;
                foreach ($map['WarningRiskList'] as $item) {
                    $model->warningRiskList[$n++] = null !== $item ? warningRiskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
