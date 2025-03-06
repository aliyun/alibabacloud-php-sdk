<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeVaultsRequest extends Model
{
    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 99. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Resource group ID.
     *
     * @example rg-*********************
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the backup vault. Valid values:
     *
     *   **UNKNOWN**: The backup vault is in an unknown state.
     *   **INITIALIZING**: The backup vault is being initialized.
     *   **CREATED**: The backup vault is created.
     *   **ERROR**: An error occurs on the backup vault.
     *
     * @example CREATED
     *
     * @var string
     */
    public $status;

    /**
     * @description Tag information. Supports up to 20 tags.
     *
     * @example 6a745bceffb042959b3b5206d6f12ad1
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Backup vault ID.
     *
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;

    /**
     * @var string
     */
    public $vaultName;

    /**
     * @description The region ID to which the backup vault belongs.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $vaultRegionId;

    /**
     * @description Backup repository type. The values are as follows:
     * - **STANDARD**: Represents a standard repository, which can be used for ECS file backups, OSS backups, NAS backups, etc.
     * - **OTS_BACKUP**: Represents a TableStore repository, which is only used for TableStore backups, and TableStore must use this type of repository.
     * @example STANDARD
     *
     * @var string
     */
    public $vaultType;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'resourceGroupId' => 'ResourceGroupId',
        'status'          => 'Status',
        'tag'             => 'Tag',
        'vaultId'         => 'VaultId',
        'vaultName'       => 'VaultName',
        'vaultRegionId'   => 'VaultRegionId',
        'vaultType'       => 'VaultType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->vaultName) {
            $res['VaultName'] = $this->vaultName;
        }
        if (null !== $this->vaultRegionId) {
            $res['VaultRegionId'] = $this->vaultRegionId;
        }
        if (null !== $this->vaultType) {
            $res['VaultType'] = $this->vaultType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVaultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['VaultName'])) {
            $model->vaultName = $map['VaultName'];
        }
        if (isset($map['VaultRegionId'])) {
            $model->vaultRegionId = $map['VaultRegionId'];
        }
        if (isset($map['VaultType'])) {
            $model->vaultType = $map['VaultType'];
        }

        return $model;
    }
}
