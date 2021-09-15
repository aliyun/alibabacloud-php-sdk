<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus\errorList;
use AlibabaCloud\Tea\Model;

class backupMachineStatus extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vaultId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var int
     */
    public $savedBackupCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $clientStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var errorList[]
     */
    public $errorList;
    protected $_name = [
        'status'           => 'Status',
        'uuid'             => 'Uuid',
        'requestId'        => 'RequestId',
        'vaultId'          => 'VaultId',
        'errorCode'        => 'ErrorCode',
        'savedBackupCount' => 'SavedBackupCount',
        'instanceId'       => 'InstanceId',
        'clientStatus'     => 'ClientStatus',
        'regionId'         => 'RegionId',
        'clientVersion'    => 'ClientVersion',
        'clientId'         => 'ClientId',
        'errorList'        => 'ErrorList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->savedBackupCount) {
            $res['SavedBackupCount'] = $this->savedBackupCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->clientStatus) {
            $res['ClientStatus'] = $this->clientStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['SavedBackupCount'])) {
            $model->savedBackupCount = $map['SavedBackupCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ClientStatus'])) {
            $model->clientStatus = $map['ClientStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
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

        return $model;
    }
}
