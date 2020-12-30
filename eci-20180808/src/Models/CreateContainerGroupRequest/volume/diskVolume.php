<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class diskVolume extends Model
{
    /**
     * @var int
     */
    public $diskSize;

    /**
     * @var string
     */
    public $fsType;

    /**
     * @var string
     */
    public $diskId;
    protected $_name = [
        'diskSize' => 'DiskSize',
        'fsType'   => 'FsType',
        'diskId'   => 'DiskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->fsType) {
            $res['FsType'] = $this->fsType;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['FsType'])) {
            $model->fsType = $map['FsType'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }

        return $model;
    }
}
