<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsStorageUsageDataResponseBody\storageUsage;
use AlibabaCloud\Tea\Model;

class DescribeVsStorageUsageDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var storageUsage
     */
    public $storageUsage;
    protected $_name = [
        'requestId'    => 'RequestId',
        'storageUsage' => 'StorageUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->storageUsage) {
            $res['StorageUsage'] = null !== $this->storageUsage ? $this->storageUsage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsStorageUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StorageUsage'])) {
            $model->storageUsage = storageUsage::fromMap($map['StorageUsage']);
        }

        return $model;
    }
}
