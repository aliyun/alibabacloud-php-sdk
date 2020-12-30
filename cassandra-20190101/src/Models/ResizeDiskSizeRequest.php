<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ResizeDiskSizeRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $dataCenterId;

    /**
     * @var int
     */
    public $diskSize;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'dataCenterId' => 'DataCenterId',
        'diskSize'     => 'DiskSize',
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
        if (null !== $this->dataCenterId) {
            $res['DataCenterId'] = $this->dataCenterId;
        }
        if (null !== $this->diskSize) {
            $res['DiskSize'] = $this->diskSize;
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
        if (isset($map['DataCenterId'])) {
            $model->dataCenterId = $map['DataCenterId'];
        }
        if (isset($map['DiskSize'])) {
            $model->diskSize = $map['DiskSize'];
        }

        return $model;
    }
}
