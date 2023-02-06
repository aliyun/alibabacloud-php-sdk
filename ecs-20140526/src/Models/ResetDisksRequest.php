<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksRequest\disk;
use AlibabaCloud\Tea\Model;

class ResetDisksRequest extends Model
{
    /**
     * @description 云盘列表。
     *
     * @var disk[]
     */
    public $disk;

    /**
     * @description Specifies whether to check the validity of the request without actually making the request. Valid values:
     *
     *   true: The validity of the request is checked but the request is not made. Check items include the required parameters, request format, and resource status limits. If the check fails, the corresponding error message is returned. If the check succeeds, the `DryRunOperation` error code is returned.
     *   false: The validity of the request is checked. If the check succeeds, the request is made.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'disk'                 => 'Disk',
        'dryRun'               => 'DryRun',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disk) {
            $res['Disk'] = [];
            if (null !== $this->disk && \is_array($this->disk)) {
                $n = 0;
                foreach ($this->disk as $item) {
                    $res['Disk'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetDisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disk'])) {
            if (!empty($map['Disk'])) {
                $model->disk = [];
                $n           = 0;
                foreach ($map['Disk'] as $item) {
                    $model->disk[$n++] = null !== $item ? disk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
