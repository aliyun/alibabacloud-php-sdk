<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class RestoreBranchRequest extends Model
{
    /**
     * @var string
     */
    public $branchId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $preserveUnderName;

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
    public $sourceBranchId;

    /**
     * @var string
     */
    public $sourceBranchLsn;

    /**
     * @var string
     */
    public $sourceBranchTimestamp;
    protected $_name = [
        'branchId' => 'BranchId',
        'clientToken' => 'ClientToken',
        'preserveUnderName' => 'PreserveUnderName',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'sourceBranchId' => 'SourceBranchId',
        'sourceBranchLsn' => 'SourceBranchLsn',
        'sourceBranchTimestamp' => 'SourceBranchTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->preserveUnderName) {
            $res['PreserveUnderName'] = $this->preserveUnderName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sourceBranchId) {
            $res['SourceBranchId'] = $this->sourceBranchId;
        }

        if (null !== $this->sourceBranchLsn) {
            $res['SourceBranchLsn'] = $this->sourceBranchLsn;
        }

        if (null !== $this->sourceBranchTimestamp) {
            $res['SourceBranchTimestamp'] = $this->sourceBranchTimestamp;
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
        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['PreserveUnderName'])) {
            $model->preserveUnderName = $map['PreserveUnderName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SourceBranchId'])) {
            $model->sourceBranchId = $map['SourceBranchId'];
        }

        if (isset($map['SourceBranchLsn'])) {
            $model->sourceBranchLsn = $map['SourceBranchLsn'];
        }

        if (isset($map['SourceBranchTimestamp'])) {
            $model->sourceBranchTimestamp = $map['SourceBranchTimestamp'];
        }

        return $model;
    }
}
