<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataResponseBody\storageUsage;

use AlibabaCloud\Tea\Model;

class storageUsageDataModule extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var int
     */
    public $storageDataValue;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'bucket'           => 'Bucket',
        'storageDataValue' => 'StorageDataValue',
        'timeStamp'        => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->storageDataValue) {
            $res['StorageDataValue'] = $this->storageDataValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageUsageDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['StorageDataValue'])) {
            $model->storageDataValue = $map['StorageDataValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
