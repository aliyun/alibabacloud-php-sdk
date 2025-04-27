<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListDataStreamsResponseBody;

use AlibabaCloud\Dara\Model;

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
    protected $_name = [
        'xManagedCount' => 'X-Managed-Count',
        'xManagedStorageSize' => 'X-Managed-StorageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
