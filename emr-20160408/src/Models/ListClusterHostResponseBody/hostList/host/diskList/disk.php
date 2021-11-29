<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterHostResponseBody\hostList\host\diskList;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @var string
     */
    public $blockMountPoint;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $diskMountPoint;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'blockMountPoint' => 'BlockMountPoint',
        'device'          => 'Device',
        'diskId'          => 'DiskId',
        'diskMountPoint'  => 'DiskMountPoint',
        'diskSize'        => 'DiskSize',
        'diskType'        => 'DiskType',
        'event'           => 'Event',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockMountPoint) {
            $res['BlockMountPoint'] = $this->blockMountPoint;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskMountPoint) {
            $res['DiskMountPoint'] = $this->diskMountPoint;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockMountPoint'])) {
            $model->blockMountPoint = $map['BlockMountPoint'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskMountPoint'])) {
            $model->diskMountPoint = $map['DiskMountPoint'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
