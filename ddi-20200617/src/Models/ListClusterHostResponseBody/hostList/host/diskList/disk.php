<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListClusterHostResponseBody\hostList\host\diskList;

use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $device;

    /**
     * @var int
     */
    public $diskSize;
    protected $_name = [
        'type'     => 'Type',
        'diskType' => 'DiskType',
        'diskId'   => 'DiskId',
        'device'   => 'Device',
        'diskSize' => 'DiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        return $model;
    }
}
