<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyDBClusterStoragePerformanceRequest extends Model
{
    /**
     * @description Specifies whether to enable the I/O Burst feature for the ESSD AutoPL disk. Valid value:
     *
     *   **true**
     *   **false** (default)
     *
     * >  This parameter is available only when the StorageType parameter is set to ESSDAUTOPL.
     *
     * @example false
     *
     * @var string
     */
    public $burstingEnabled;

    /**
     * @example 6000170000591aed949d0f******************
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example pc-*************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @example Upgrade
     *
     * @var string
     */
    public $modifyType;

    /**
     * @example 2500
     *
     * @var int
     */
    public $provisionedIops;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @example ESSDAUTOPL
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'burstingEnabled' => 'BurstingEnabled',
        'clientToken' => 'ClientToken',
        'DBClusterId' => 'DBClusterId',
        'modifyType' => 'ModifyType',
        'provisionedIops' => 'ProvisionedIops',
        'resourceOwnerId' => 'ResourceOwnerId',
        'storageType' => 'StorageType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDBClusterStoragePerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
