<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CutOverReplicationJobRequest extends Model
{
    /**
     * @description The ID of the incremental migration job.
     *
     * @example j-bp1fnx5y3djc4cop****
     *
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description Specifies whether to migrate full data for the last time. Valid Values:
     *
     *   true: migrates full data for the last time.
     *   false: does not migrate full data for the last time.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $syncData;
    protected $_name = [
        'jobId'                => 'JobId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'syncData'             => 'SyncData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->syncData) {
            $res['SyncData'] = $this->syncData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CutOverReplicationJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['SyncData'])) {
            $model->syncData = $map['SyncData'];
        }

        return $model;
    }
}
