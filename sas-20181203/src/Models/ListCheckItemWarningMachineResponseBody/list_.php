<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_\fixList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningMachineResponseBody\list_\warningRiskList;

class list_ extends Model
{
    /**
     * @var int
     */
    public $authVersion;
    /**
     * @var bool
     */
    public $bind;
    /**
     * @var string
     */
    public $containerId;
    /**
     * @var string
     */
    public $containerName;
    /**
     * @var fixList[]
     */
    public $fixList;
    /**
     * @var int
     */
    public $fixStatus;
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
     * @var int
     */
    public $lastHandleTime;
    /**
     * @var int
     */
    public $lastScanTime;
    /**
     * @var bool
     */
    public $portOpen;
    /**
     * @var string
     */
    public $prompt;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetName;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var string
     */
    public $uuid;
    /**
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
        if (\is_array($this->fixList)) {
            Model::validateArray($this->fixList);
        }
        if (\is_array($this->warningRiskList)) {
            Model::validateArray($this->warningRiskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->fixList)) {
                $res['FixList'] = [];
                $n1             = 0;
                foreach ($this->fixList as $item1) {
                    $res['FixList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->warningRiskList)) {
                $res['WarningRiskList'] = [];
                $n1                     = 0;
                foreach ($this->warningRiskList as $item1) {
                    $res['WarningRiskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1             = 0;
                foreach ($map['FixList'] as $item1) {
                    $model->fixList[$n1++] = fixList::fromMap($item1);
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
                $n1                     = 0;
                foreach ($map['WarningRiskList'] as $item1) {
                    $model->warningRiskList[$n1++] = warningRiskList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
