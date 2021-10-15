<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody;

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
    protected $_name = [
        'xManagedStorageSize' => 'X-Managed-StorageSize',
        'xManagedCount'       => 'X-Managed-Count',
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

        return $model;
    }
}
