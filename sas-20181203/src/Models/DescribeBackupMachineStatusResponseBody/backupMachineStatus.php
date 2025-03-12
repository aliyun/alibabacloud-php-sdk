<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus\errorList;
use AlibabaCloud\Tea\Model;

class backupMachineStatus extends Model
{
    /**
     * @description The ID of the anti-ransomware agent.
     *
     * @example c-000dbefaw9f7gnbw****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The status of the anti-ransomware agent. Valid values:
     *
     *   **ONLINE**: normal
     *   **CLIENT_CONNECTION_ERROR**: abnormal
     *   **UNINSTALLING**: being uninstalled
     *   **UNINSTALL_FAILED**: failed to be uninstalled
     *   **UPGRADING**: being upgraded
     *   **UPGRADE_FAILED**: failed to be upgraded
     *
     * @example ONLINE
     *
     * @var string
     */
    public $clientStatus;

    /**
     * @description The version of the anti-ransomware agent.
     *
     * @example 2.11.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The error code returned.
     *
     * @example CLIENT_CONNECTION_ERROR
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description An array that consists of the error information reported by the backup server.
     *
     * @var errorList[]
     */
    public $errorList;

    /**
     * @description The ID of the server.
     *
     * @example i-2zeaqkb80vloxjcj****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region in which the server resides.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The number of backup versions.
     *
     * @example 7
     *
     * @var int
     */
    public $savedBackupCount;

    /**
     * @description The status of the anti-ransomware service. Valid values:
     *   **SERVICE_EXCEPTION**: Service exception
     *   **RESTORING**: Restoring
     *   **BACKING_UP**: Backup in process
     *
     * @example RESTORING
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @description The status of the anti-ransomware agent. Valid values:
     *
     *   **NOT_INSTALLED**: not installed
     *   **CLIENT_CONNECTION_ERROR**: abnormal
     *   **ACTIVATED**: normal
     *
     * @example ACTIVATED
     *
     * @var string
     */
    public $status;

    /**
     * @description The UUID of the server.
     *
     * @example eb2c782e-64f2-4590-a86c-d90164df****
     *
     * @var string
     */
    public $uuid;

    /**
     * @description The ID of the backup vault in which the backup data is stored.
     *
     * @example v-0005i2qh5fcr6seo****
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clientId'         => 'ClientId',
        'clientStatus'     => 'ClientStatus',
        'clientVersion'    => 'ClientVersion',
        'errorCode'        => 'ErrorCode',
        'errorList'        => 'ErrorList',
        'instanceId'       => 'InstanceId',
        'regionId'         => 'RegionId',
        'savedBackupCount' => 'SavedBackupCount',
        'serviceStatus'    => 'ServiceStatus',
        'status'           => 'Status',
        'uuid'             => 'Uuid',
        'vaultId'          => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorList) {
            $res['ErrorList'] = [];
            if (null !== $this->errorList && \is_array($this->errorList)) {
                $n = 0;
                foreach ($this->errorList as $item) {
                    $res['ErrorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->savedBackupCount) {
            $res['SavedBackupCount'] = $this->savedBackupCount;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupMachineStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorList'])) {
            if (!empty($map['ErrorList'])) {
                $model->errorList = [];
                $n                = 0;
                foreach ($map['ErrorList'] as $item) {
                    $model->errorList[$n++] = null !== $item ? errorList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SavedBackupCount'])) {
            $model->savedBackupCount = $map['SavedBackupCount'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
