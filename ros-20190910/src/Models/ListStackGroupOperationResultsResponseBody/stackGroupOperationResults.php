<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponseBody;

use AlibabaCloud\Tea\Model;

class stackGroupOperationResults extends Model
{
    /**
     * @description The ID of the account to which the stack instance belongs.
     *
     *   If the stack group has self-managed permissions, the stack instance belongs to an Alibaba Cloud account.
     *   If the stack group has service-managed permissions, the stack instance belongs to a member account in the resource directory.
     *
     * >  For more information about the account, see [Overview](https://help.aliyun.com/document_detail/154578.html).
     * @example 175458090349****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The folder ID of the resource directory.
     *
     * >  This parameter is returned only when the stack group is granted service-managed permissions.
     * @example "fd-4PvlVLOL8v"
     *
     * @var string
     */
    public $rdFolderId;

    /**
     * @description The region ID of the stack instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The status of the operation.
     *
     * Valid values:
     *
     *   RUNNING: The operation is being performed.
     *   SUCCEEDED: The operation succeeded.
     *   FAILED: The operation failed.
     *   STOPPING: The operation is being stopped.
     *   STOPPED: The operation is stopped.
     *
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;

    /**
     * @description The reason why the operation is in a specific state.
     *
     * >  This parameter is returned only when stack instances are in the OUTDATED state.
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
