<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceIndicesResponseBody;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @var int
     */
    public $xManagedCount;

    /**
     * @var int
     */
    public $xManagedStorageSize;

    /**
     * @var int
     */
    public $xOSSCount;

    /**
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
