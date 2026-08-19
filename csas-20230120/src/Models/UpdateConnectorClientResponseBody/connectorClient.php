<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateConnectorClientResponseBody;

use AlibabaCloud\Dara\Model;

class connectorClient extends Model
{
    /**
     * @var string
     */
    public $CPUSize;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $devTag;

    /**
     * @var string
     */
    public $hosname;

    /**
     * @var string
     */
    public $kernelVersion;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $operationStatus;

    /**
     * @var string
     */
    public $privateIp;

    /**
     * @var int
     */
    public $processRunTime;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string[]
     */
    public $releaseNotes;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $upgradeStatus;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionToRollback;
    protected $_name = [
        'CPUSize' => 'CPUSize',
        'connectionStatus' => 'ConnectionStatus',
        'connectorId' => 'ConnectorId',
        'createTime' => 'CreateTime',
        'devTag' => 'DevTag',
        'hosname' => 'Hosname',
        'kernelVersion' => 'KernelVersion',
        'memorySize' => 'MemorySize',
        'operationStatus' => 'OperationStatus',
        'privateIp' => 'PrivateIp',
        'processRunTime' => 'ProcessRunTime',
        'publicIp' => 'PublicIp',
        'releaseNotes' => 'ReleaseNotes',
        'status' => 'Status',
        'upgradeStatus' => 'UpgradeStatus',
        'version' => 'Version',
        'versionToRollback' => 'VersionToRollback',
    ];

    public function validate()
    {
        if (\is_array($this->releaseNotes)) {
            Model::validateArray($this->releaseNotes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CPUSize) {
            $res['CPUSize'] = $this->CPUSize;
        }

        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }

        if (null !== $this->hosname) {
            $res['Hosname'] = $this->hosname;
        }

        if (null !== $this->kernelVersion) {
            $res['KernelVersion'] = $this->kernelVersion;
        }

        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }

        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->processRunTime) {
            $res['ProcessRunTime'] = $this->processRunTime;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->releaseNotes) {
            if (\is_array($this->releaseNotes)) {
                $res['ReleaseNotes'] = [];
                $n1 = 0;
                foreach ($this->releaseNotes as $item1) {
                    $res['ReleaseNotes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->upgradeStatus) {
            $res['UpgradeStatus'] = $this->upgradeStatus;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionToRollback) {
            $res['VersionToRollback'] = $this->versionToRollback;
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
        if (isset($map['CPUSize'])) {
            $model->CPUSize = $map['CPUSize'];
        }

        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }

        if (isset($map['Hosname'])) {
            $model->hosname = $map['Hosname'];
        }

        if (isset($map['KernelVersion'])) {
            $model->kernelVersion = $map['KernelVersion'];
        }

        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['ProcessRunTime'])) {
            $model->processRunTime = $map['ProcessRunTime'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['ReleaseNotes'])) {
            if (!empty($map['ReleaseNotes'])) {
                $model->releaseNotes = [];
                $n1 = 0;
                foreach ($map['ReleaseNotes'] as $item1) {
                    $model->releaseNotes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpgradeStatus'])) {
            $model->upgradeStatus = $map['UpgradeStatus'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionToRollback'])) {
            $model->versionToRollback = $map['VersionToRollback'];
        }

        return $model;
    }
}
