<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ResizeMultiZoneClusterDiskSizeRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $coreDiskSize;

    /**
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
