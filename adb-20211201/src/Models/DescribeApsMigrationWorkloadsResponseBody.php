<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsMigrationWorkloadsResponseBody\migrationWorkloads;
use AlibabaCloud\Tea\Model;

class DescribeApsMigrationWorkloadsResponseBody extends Model
{
    /**
     * @description -
     *
     * @var migrationWorkloads[]
     */
    public $migrationWorkloads;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ******-3EEC-57F0-9F06-******
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'migrationWorkloads' => 'MigrationWorkloads',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrationWorkloads) {
            $res['MigrationWorkloads'] = [];
            if (null !== $this->migrationWorkloads && \is_array($this->migrationWorkloads)) {
                $n = 0;
                foreach ($this->migrationWorkloads as $item) {
                    $res['MigrationWorkloads'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApsMigrationWorkloadsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationWorkloads'])) {
            if (!empty($map['MigrationWorkloads'])) {
                $model->migrationWorkloads = [];
                $n                         = 0;
                foreach ($map['MigrationWorkloads'] as $item) {
                    $model->migrationWorkloads[$n++] = null !== $item ? migrationWorkloads::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
