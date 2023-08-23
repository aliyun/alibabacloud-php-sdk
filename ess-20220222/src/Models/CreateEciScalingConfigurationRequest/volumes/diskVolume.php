<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes;

use AlibabaCloud\Tea\Model;

class diskVolume extends Model
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
    public $fsType;
    protected $_name = [
        'diskId'   => 'DiskId',
        'diskSize' => 'DiskSize',
        'fsType'   => 'FsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
        }
        if (null !== $this->fsType) {
            $res['FsType'] = $this->fsType;
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
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }
        if (isset($map['FsType'])) {
            $model->fsType = $map['FsType'];
        }

        return $model;
    }
}
