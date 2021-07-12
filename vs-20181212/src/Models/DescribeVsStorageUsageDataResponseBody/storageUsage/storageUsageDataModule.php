<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataResponseBody\storageUsage;

use AlibabaCloud\Tea\Model;

class storageUsageDataModule extends Model
{
    /**
     * @var int
     */
    public $storageDataValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $bucket;
    protected $_name = [
        'storageDataValue' => 'StorageDataValue',
        'timeStamp'        => 'TimeStamp',
        'bucket'           => 'Bucket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageDataValue) {
            $res['StorageDataValue'] = $this->storageDataValue;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
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
        if (isset($map['StorageDataValue'])) {
            $model->storageDataValue = $map['StorageDataValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }

        return $model;
    }
}
