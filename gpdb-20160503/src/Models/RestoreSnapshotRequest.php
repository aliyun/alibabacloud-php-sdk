<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class RestoreSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $finalizeRestore;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $restoredBranchName;

    /**
     * @var string
     */
    public $restoredLsn;

    /**
     * @var string
     */
    public $targetBranchId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'finalizeRestore' => 'FinalizeRestore',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'restoredBranchName' => 'RestoredBranchName',
        'restoredLsn' => 'RestoredLsn',
        'targetBranchId' => 'TargetBranchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->finalizeRestore) {
            $res['FinalizeRestore'] = $this->finalizeRestore;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->restoredBranchName) {
            $res['RestoredBranchName'] = $this->restoredBranchName;
        }

        if (null !== $this->restoredLsn) {
            $res['RestoredLsn'] = $this->restoredLsn;
        }

        if (null !== $this->targetBranchId) {
            $res['TargetBranchId'] = $this->targetBranchId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['FinalizeRestore'])) {
            $model->finalizeRestore = $map['FinalizeRestore'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RestoredBranchName'])) {
            $model->restoredBranchName = $map['RestoredBranchName'];
        }

        if (isset($map['RestoredLsn'])) {
            $model->restoredLsn = $map['RestoredLsn'];
        }

        if (isset($map['TargetBranchId'])) {
            $model->targetBranchId = $map['TargetBranchId'];
        }

        return $model;
    }
}
