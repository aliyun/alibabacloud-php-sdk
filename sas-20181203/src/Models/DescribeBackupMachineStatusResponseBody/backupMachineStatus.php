<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus\errorList;

class backupMachineStatus extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clientStatus;
    /**
     * @var string
     */
    public $clientVersion;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var errorList[]
     */
    public $errorList;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $savedBackupCount;
    /**
     * @var string
     */
    public $serviceStatus;
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
        if (\is_array($this->errorList)) {
            Model::validateArray($this->errorList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->errorList)) {
                $res['ErrorList'] = [];
                $n1               = 0;
                foreach ($this->errorList as $item1) {
                    $res['ErrorList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1               = 0;
                foreach ($map['ErrorList'] as $item1) {
                    $model->errorList[$n1++] = errorList::fromMap($item1);
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
