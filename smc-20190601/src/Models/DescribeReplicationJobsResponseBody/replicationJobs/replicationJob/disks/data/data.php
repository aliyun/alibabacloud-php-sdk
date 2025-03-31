<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\disks\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\disks\data\data\parts;

class data extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var bool
     */
    public $LVM;

    /**
     * @var parts
     */
    public $parts;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'diskId' => 'DiskId',
        'LVM' => 'LVM',
        'parts' => 'Parts',
        'size' => 'Size',
    ];

    public function validate()
    {
        if (null !== $this->parts) {
            $this->parts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->LVM) {
            $res['LVM'] = $this->LVM;
        }

        if (null !== $this->parts) {
            $res['Parts'] = null !== $this->parts ? $this->parts->toArray($noStream) : $this->parts;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        if (isset($map['LVM'])) {
            $model->LVM = $map['LVM'];
        }

        if (isset($map['Parts'])) {
            $model->parts = parts::fromMap($map['Parts']);
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
