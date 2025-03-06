<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeOtsTableSnapshotsRequest\otsInstances;
use AlibabaCloud\Tea\Model;

class DescribeOtsTableSnapshotsRequest extends Model
{
    /**
     * @description The name of the RAM role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example BackupRole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up across Alibaba Cloud accounts.
     *
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The UID of the source account used for cross-account backup.
     *
     * @example 144015xxxxx98732
     *
     * @var int
     */
    public $crossAccountUserId;

    /**
     * @description The end time of the backup. The value must be a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1652068250881
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The maximum number of rows that you want the current query to return.
     *
     * @example 100
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token that is required to obtain the next page of backup snapshots.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The Tablestore instances that are backed up.
     *
     * @var otsInstances[]
     */
    public $otsInstances;

    /**
     * @description The snapshot IDs.
     *
     * @var string[]
     */
    public $snapshotIds;

    /**
     * @description The start time of the backup. The value must be a UNIX timestamp. Unit: milliseconds.
     *
     * @example 1611109271630
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'endTime'              => 'EndTime',
        'limit'                => 'Limit',
        'nextToken'            => 'NextToken',
        'otsInstances'         => 'OtsInstances',
        'snapshotIds'          => 'SnapshotIds',
        'startTime'            => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->otsInstances) {
            $res['OtsInstances'] = [];
            if (null !== $this->otsInstances && \is_array($this->otsInstances)) {
                $n = 0;
                foreach ($this->otsInstances as $item) {
                    $res['OtsInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->snapshotIds) {
            $res['SnapshotIds'] = $this->snapshotIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOtsTableSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OtsInstances'])) {
            if (!empty($map['OtsInstances'])) {
                $model->otsInstances = [];
                $n                   = 0;
                foreach ($map['OtsInstances'] as $item) {
                    $model->otsInstances[$n++] = null !== $item ? otsInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SnapshotIds'])) {
            if (!empty($map['SnapshotIds'])) {
                $model->snapshotIds = $map['SnapshotIds'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
