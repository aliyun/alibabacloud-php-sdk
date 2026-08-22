<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeOpenSearchResourceUsageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $docCount;

    /**
     * @var int
     */
    public $indexCount;

    /**
     * @var int
     */
    public $storageSizeInBytes;

    /**
     * @var int
     */
    public $storageTotalInBytes;

    /**
     * @var float
     */
    public $storageUsagePercent;
    protected $_name = [
        'docCount' => 'DocCount',
        'indexCount' => 'IndexCount',
        'storageSizeInBytes' => 'StorageSizeInBytes',
        'storageTotalInBytes' => 'StorageTotalInBytes',
        'storageUsagePercent' => 'StorageUsagePercent',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docCount) {
            $res['DocCount'] = $this->docCount;
        }

        if (null !== $this->indexCount) {
            $res['IndexCount'] = $this->indexCount;
        }

        if (null !== $this->storageSizeInBytes) {
            $res['StorageSizeInBytes'] = $this->storageSizeInBytes;
        }

        if (null !== $this->storageTotalInBytes) {
            $res['StorageTotalInBytes'] = $this->storageTotalInBytes;
        }

        if (null !== $this->storageUsagePercent) {
            $res['StorageUsagePercent'] = $this->storageUsagePercent;
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
        if (isset($map['DocCount'])) {
            $model->docCount = $map['DocCount'];
        }

        if (isset($map['IndexCount'])) {
            $model->indexCount = $map['IndexCount'];
        }

        if (isset($map['StorageSizeInBytes'])) {
            $model->storageSizeInBytes = $map['StorageSizeInBytes'];
        }

        if (isset($map['StorageTotalInBytes'])) {
            $model->storageTotalInBytes = $map['StorageTotalInBytes'];
        }

        if (isset($map['StorageUsagePercent'])) {
            $model->storageUsagePercent = $map['StorageUsagePercent'];
        }

        return $model;
    }
}
