<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationResponseBody\DBInstanceClass;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationResponseBody\DBInstanceGroupCount;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeSpecificationResponseBody\storageNotice;
use AlibabaCloud\Tea\Model;

class DescribeSpecificationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var DBInstanceClass[]
     */
    public $DBInstanceClass;

    /**
     * @var DBInstanceGroupCount[]
     */
    public $DBInstanceGroupCount;

    /**
     * @var storageNotice[]
     */
    public $storageNotice;
    protected $_name = [
        'requestId'            => 'RequestId',
        'DBInstanceClass'      => 'DBInstanceClass',
        'DBInstanceGroupCount' => 'DBInstanceGroupCount',
        'storageNotice'        => 'StorageNotice',
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
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = [];
            if (null !== $this->DBInstanceClass && \is_array($this->DBInstanceClass)) {
                $n = 0;
                foreach ($this->DBInstanceClass as $item) {
                    $res['DBInstanceClass'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->DBInstanceGroupCount) {
            $res['DBInstanceGroupCount'] = [];
            if (null !== $this->DBInstanceGroupCount && \is_array($this->DBInstanceGroupCount)) {
                $n = 0;
                foreach ($this->DBInstanceGroupCount as $item) {
                    $res['DBInstanceGroupCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storageNotice) {
            $res['StorageNotice'] = [];
            if (null !== $this->storageNotice && \is_array($this->storageNotice)) {
                $n = 0;
                foreach ($this->storageNotice as $item) {
                    $res['StorageNotice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSpecificationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceClass'])) {
            if (!empty($map['DBInstanceClass'])) {
                $model->DBInstanceClass = [];
                $n                      = 0;
                foreach ($map['DBInstanceClass'] as $item) {
                    $model->DBInstanceClass[$n++] = null !== $item ? DBInstanceClass::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DBInstanceGroupCount'])) {
            if (!empty($map['DBInstanceGroupCount'])) {
                $model->DBInstanceGroupCount = [];
                $n                           = 0;
                foreach ($map['DBInstanceGroupCount'] as $item) {
                    $model->DBInstanceGroupCount[$n++] = null !== $item ? DBInstanceGroupCount::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StorageNotice'])) {
            if (!empty($map['StorageNotice'])) {
                $model->storageNotice = [];
                $n                    = 0;
                foreach ($map['StorageNotice'] as $item) {
                    $model->storageNotice[$n++] = null !== $item ? storageNotice::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
