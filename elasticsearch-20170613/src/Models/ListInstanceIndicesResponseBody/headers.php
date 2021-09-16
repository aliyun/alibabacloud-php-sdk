<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponseBody;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @var int
     */
    public $xManagedStorageSize;

    /**
     * @var int
     */
    public $xManagedCount;

    /**
     * @var int
     */
    public $xOSSStorageSize;

    /**
     * @var int
     */
    public $xOSSCount;
    protected $_name = [
        'xManagedStorageSize' => 'X-Managed-StorageSize',
        'xManagedCount'       => 'X-Managed-Count',
        'xOSSStorageSize'     => 'X-OSS-StorageSize',
        'xOSSCount'           => 'X-OSS-Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->xManagedStorageSize) {
            $res['X-Managed-StorageSize'] = $this->xManagedStorageSize;
        }
        if (null !== $this->xManagedCount) {
            $res['X-Managed-Count'] = $this->xManagedCount;
        }
        if (null !== $this->xOSSStorageSize) {
            $res['X-OSS-StorageSize'] = $this->xOSSStorageSize;
        }
        if (null !== $this->xOSSCount) {
            $res['X-OSS-Count'] = $this->xOSSCount;
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
        if (isset($map['X-Managed-StorageSize'])) {
            $model->xManagedStorageSize = $map['X-Managed-StorageSize'];
        }
        if (isset($map['X-Managed-Count'])) {
            $model->xManagedCount = $map['X-Managed-Count'];
        }
        if (isset($map['X-OSS-StorageSize'])) {
            $model->xOSSStorageSize = $map['X-OSS-StorageSize'];
        }
        if (isset($map['X-OSS-Count'])) {
            $model->xOSSCount = $map['X-OSS-Count'];
        }

        return $model;
    }
}
