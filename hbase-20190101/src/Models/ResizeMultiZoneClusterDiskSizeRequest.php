<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

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
        'clusterId' => 'ClusterId',
        'coreDiskSize' => 'CoreDiskSize',
        'logDiskSize' => 'LogDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
