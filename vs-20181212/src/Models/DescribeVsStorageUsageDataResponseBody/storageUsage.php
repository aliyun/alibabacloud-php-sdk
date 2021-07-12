<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataResponseBody\storageUsage\storageUsageDataModule;
use AlibabaCloud\Tea\Model;

class storageUsage extends Model
{
    /**
     * @var storageUsageDataModule[]
     */
    public $storageUsageDataModule;
    protected $_name = [
        'storageUsageDataModule' => 'StorageUsageDataModule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageUsageDataModule) {
            $res['StorageUsageDataModule'] = [];
            if (null !== $this->storageUsageDataModule && \is_array($this->storageUsageDataModule)) {
                $n = 0;
                foreach ($this->storageUsageDataModule as $item) {
                    $res['StorageUsageDataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageUsageDataModule'])) {
            if (!empty($map['StorageUsageDataModule'])) {
                $model->storageUsageDataModule = [];
                $n                             = 0;
                foreach ($map['StorageUsageDataModule'] as $item) {
                    $model->storageUsageDataModule[$n++] = null !== $item ? storageUsageDataModule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
