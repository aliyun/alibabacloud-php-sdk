<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponseBody;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @description The details of the index list.
     *
     * @example 15
     *
     * @var int
     */
    public $xManagedCount;

    /**
     * @description The total number of indexes in the OpenStore cold phase.
     *
     * @example 18093942932
     *
     * @var int
     */
    public $xManagedStorageSize;

    /**
     * @description The time when the index list was queried.
     *
     * @example 5
     *
     * @var int
     */
    public $xOSSCount;

    /**
     * @description This parameter is deprecated.
     *
     * @example 9093942932
     *
     * @var int
     */
    public $xOSSStorageSize;
    protected $_name = [
        'xManagedCount'       => 'X-Managed-Count',
        'xManagedStorageSize' => 'X-Managed-StorageSize',
        'xOSSCount'           => 'X-OSS-Count',
        'xOSSStorageSize'     => 'X-OSS-StorageSize',
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
        if (null !== $this->xOSSCount) {
            $res['X-OSS-Count'] = $this->xOSSCount;
        }
        if (null !== $this->xOSSStorageSize) {
            $res['X-OSS-StorageSize'] = $this->xOSSStorageSize;
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
        if (isset($map['X-OSS-Count'])) {
            $model->xOSSCount = $map['X-OSS-Count'];
        }
        if (isset($map['X-OSS-StorageSize'])) {
            $model->xOSSStorageSize = $map['X-OSS-StorageSize'];
        }

        return $model;
    }
}
