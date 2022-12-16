<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $xManagedCount;

    /**
     * @example 143993923932990
     *
     * @var int
     */
    public $xManagedStorageSize;
    protected $_name = [
        'xManagedCount'       => 'X-Managed-Count',
        'xManagedStorageSize' => 'X-Managed-StorageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->xManagedCount) {
            $res['X-Managed-Count'] = $this->xManagedCount;
        }
        if (null !== $this->xManagedStorageSize) {
            $res['X-Managed-StorageSize'] = $this->xManagedStorageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X-Managed-Count'])) {
            $model->xManagedCount = $map['X-Managed-Count'];
        }
        if (isset($map['X-Managed-StorageSize'])) {
            $model->xManagedStorageSize = $map['X-Managed-StorageSize'];
        }

        return $model;
    }
}
