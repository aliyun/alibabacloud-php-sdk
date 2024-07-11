<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ResizeMultiZoneClusterDiskSizeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-f5d6vc2r8d6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 480
     *
     * @var int
     */
    public $coreDiskSize;

    /**
     * @example 440
     *
     * @var int
     */
    public $logDiskSize;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'coreDiskSize' => 'CoreDiskSize',
        'logDiskSize'  => 'LogDiskSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->coreDiskSize) {
            $res['CoreDiskSize'] = $this->coreDiskSize;
        }
        if (null !== $this->logDiskSize) {
            $res['LogDiskSize'] = $this->logDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeMultiZoneClusterDiskSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CoreDiskSize'])) {
            $model->coreDiskSize = $map['CoreDiskSize'];
        }
        if (isset($map['LogDiskSize'])) {
            $model->logDiskSize = $map['LogDiskSize'];
        }

        return $model;
    }
}
