<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGResponseBody\SDGs;

use AlibabaCloud\Tea\Model;

class avaliableRegionIds extends Model
{
    /**
     * @example 2023-02-27 15:13:26
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example cn-hangzhou-26
     *
     * @var string
     */
    public $regionId;

    /**
     * @example sp-517qu0tgznrg622he7nf4wd7n
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'regionId'     => 'RegionId',
        'snapshotId'   => 'SnapshotId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return avaliableRegionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
