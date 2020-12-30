<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\CreateReplicationJobRequest;

use AlibabaCloud\Tea\Model;

class systemDiskPart extends Model
{
    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var bool
     */
    public $block;

    /**
     * @var string
     */
    public $device;
    protected $_name = [
        'sizeBytes' => 'SizeBytes',
        'block'     => 'Block',
        'device'    => 'Device',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sizeBytes) {
            $res['SizeBytes'] = $this->sizeBytes;
        }
        if (null !== $this->block) {
            $res['Block'] = $this->block;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDiskPart
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SizeBytes'])) {
            $model->sizeBytes = $map['SizeBytes'];
        }
        if (isset($map['Block'])) {
            $model->block = $map['Block'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        return $model;
    }
}
