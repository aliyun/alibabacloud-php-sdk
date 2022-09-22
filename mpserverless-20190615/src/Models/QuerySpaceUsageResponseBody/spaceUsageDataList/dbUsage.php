<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceUsageResponseBody\spaceUsageDataList;

use AlibabaCloud\Tea\Model;

class dbUsage extends Model
{
    /**
     * @var int
     */
    public $readCount;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var int
     */
    public $writeCount;
    protected $_name = [
        'readCount'   => 'ReadCount',
        'storageSize' => 'StorageSize',
        'writeCount'  => 'WriteCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readCount) {
            $res['ReadCount'] = $this->readCount;
        }
        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }
        if (null !== $this->writeCount) {
            $res['WriteCount'] = $this->writeCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadCount'])) {
            $model->readCount = $map['ReadCount'];
        }
        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }
        if (isset($map['WriteCount'])) {
            $model->writeCount = $map['WriteCount'];
        }

        return $model;
    }
}
