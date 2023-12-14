<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeStorageBundlesResponseBody;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeStorageBundlesResponseBody\storageBundles\storageBundle;
use AlibabaCloud\Tea\Model;

class storageBundles extends Model
{
    /**
     * @var storageBundle[]
     */
    public $storageBundle;
    protected $_name = [
        'storageBundle' => 'StorageBundle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageBundle) {
            $res['StorageBundle'] = [];
            if (null !== $this->storageBundle && \is_array($this->storageBundle)) {
                $n = 0;
                foreach ($this->storageBundle as $item) {
                    $res['StorageBundle'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageBundles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageBundle'])) {
            if (!empty($map['StorageBundle'])) {
                $model->storageBundle = [];
                $n                    = 0;
                foreach ($map['StorageBundle'] as $item) {
                    $model->storageBundle[$n++] = null !== $item ? storageBundle::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
