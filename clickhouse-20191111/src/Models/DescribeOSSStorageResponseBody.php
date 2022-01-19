<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\Tea\Model;

class DescribeOSSStorageResponseBody extends Model
{
    /**
     * @var bool
     */
    public $coldStorage;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $storageUsage;
    protected $_name = [
        'coldStorage'  => 'ColdStorage',
        'policy'       => 'Policy',
        'requestId'    => 'RequestId',
        'state'        => 'State',
        'storageUsage' => 'StorageUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coldStorage) {
            $res['ColdStorage'] = $this->coldStorage;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->storageUsage) {
            $res['StorageUsage'] = $this->storageUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOSSStorageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColdStorage'])) {
            $model->coldStorage = $map['ColdStorage'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StorageUsage'])) {
            $model->storageUsage = $map['StorageUsage'];
        }

        return $model;
    }
}
