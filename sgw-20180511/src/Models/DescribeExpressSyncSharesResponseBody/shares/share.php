<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeExpressSyncSharesResponseBody\shares;

use AlibabaCloud\Tea\Model;

class share extends Model
{
    /**
     * @example sb-0003c7qh5yuc1z6b8***
     *
     * @var string
     */
    public $expressSyncId;

    /**
     * @example MNSHealthy
     *
     * @var string
     */
    public $expressSyncState;

    /**
     * @example gw-000245alq48e7ytg***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $gatewayRegion;

    /**
     * @example sgw-express-sync-queue-gw-000245alq48e7ytgxq03***
     *
     * @var string
     */
    public $mnsQueue;

    /**
     * @example ji***
     *
     * @var string
     */
    public $shareName;

    /**
     * @example sb-0003c7qh5yuc1z6b8***
     *
     * @var string
     */
    public $storageBundleId;

    /**
     * @example 100
     *
     * @var int
     */
    public $syncProgress;
    protected $_name = [
        'expressSyncId'    => 'ExpressSyncId',
        'expressSyncState' => 'ExpressSyncState',
        'gatewayId'        => 'GatewayId',
        'gatewayName'      => 'GatewayName',
        'gatewayRegion'    => 'GatewayRegion',
        'mnsQueue'         => 'MnsQueue',
        'shareName'        => 'ShareName',
        'storageBundleId'  => 'StorageBundleId',
        'syncProgress'     => 'SyncProgress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressSyncId) {
            $res['ExpressSyncId'] = $this->expressSyncId;
        }
        if (null !== $this->expressSyncState) {
            $res['ExpressSyncState'] = $this->expressSyncState;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }
        if (null !== $this->gatewayRegion) {
            $res['GatewayRegion'] = $this->gatewayRegion;
        }
        if (null !== $this->mnsQueue) {
            $res['MnsQueue'] = $this->mnsQueue;
        }
        if (null !== $this->shareName) {
            $res['ShareName'] = $this->shareName;
        }
        if (null !== $this->storageBundleId) {
            $res['StorageBundleId'] = $this->storageBundleId;
        }
        if (null !== $this->syncProgress) {
            $res['SyncProgress'] = $this->syncProgress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return share
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressSyncId'])) {
            $model->expressSyncId = $map['ExpressSyncId'];
        }
        if (isset($map['ExpressSyncState'])) {
            $model->expressSyncState = $map['ExpressSyncState'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }
        if (isset($map['GatewayRegion'])) {
            $model->gatewayRegion = $map['GatewayRegion'];
        }
        if (isset($map['MnsQueue'])) {
            $model->mnsQueue = $map['MnsQueue'];
        }
        if (isset($map['ShareName'])) {
            $model->shareName = $map['ShareName'];
        }
        if (isset($map['StorageBundleId'])) {
            $model->storageBundleId = $map['StorageBundleId'];
        }
        if (isset($map['SyncProgress'])) {
            $model->syncProgress = $map['SyncProgress'];
        }

        return $model;
    }
}
