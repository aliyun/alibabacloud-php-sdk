<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models\DescribeDesktopsResponseBody\desktops;

use AlibabaCloud\Dara\Model;

class disks extends Model
{
    /**
     * @var string
     */
    public $diskId;

    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $diskType;
    protected $_name = [
        'diskId' => 'DiskId',
        'diskSize' => 'DiskSize',
        'diskType' => 'DiskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
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

        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        return $model;
    }
}
