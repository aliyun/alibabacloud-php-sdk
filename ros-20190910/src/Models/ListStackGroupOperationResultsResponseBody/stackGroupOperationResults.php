<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponseBody;

use AlibabaCloud\Tea\Model;

class stackGroupOperationResults extends Model
{
    /**
     * @example 175458090349****
     *
     * @var string
     */
    public $accountId;

    /**
     * @example "fd-4PvlVLOL8v"
     *
     * @var string
     */
    public $rdFolderId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;

    /**
     * @example User initiated operation
     *
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'accountId'    => 'AccountId',
        'rdFolderId'   => 'RdFolderId',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
        'statusReason' => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->rdFolderId) {
            $res['RdFolderId'] = $this->rdFolderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroupOperationResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['RdFolderId'])) {
            $model->rdFolderId = $map['RdFolderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
