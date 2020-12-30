<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ResizeDiskSizeRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $nodeDiskSize;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'nodeDiskSize' => 'NodeDiskSize',
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
        if (null !== $this->nodeDiskSize) {
            $res['NodeDiskSize'] = $this->nodeDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeDiskSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NodeDiskSize'])) {
            $model->nodeDiskSize = $map['NodeDiskSize'];
        }

        return $model;
    }
}
