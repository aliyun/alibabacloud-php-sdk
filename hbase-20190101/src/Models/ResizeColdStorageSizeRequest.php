<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ResizeColdStorageSizeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-bp169l540vc6c****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example 900
     *
     * @var int
     */
    public $coldStorageSize;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'coldStorageSize' => 'ColdStorageSize',
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
        if (null !== $this->coldStorageSize) {
            $res['ColdStorageSize'] = $this->coldStorageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeColdStorageSizeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ColdStorageSize'])) {
            $model->coldStorageSize = $map['ColdStorageSize'];
        }

        return $model;
    }
}
