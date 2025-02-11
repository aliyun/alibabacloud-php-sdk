<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsMigrationWorkloadsResponseBody\migrationWorkloads;

class DescribeApsMigrationWorkloadsResponseBody extends Model
{
    /**
     * @var migrationWorkloads[]
     */
    public $migrationWorkloads;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (\is_array($this->migrationWorkloads)) {
            Model::validateArray($this->migrationWorkloads);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->migrationWorkloads) {
            if (\is_array($this->migrationWorkloads)) {
                $res['MigrationWorkloads'] = [];
                $n1                        = 0;
                foreach ($this->migrationWorkloads as $item1) {
                    $res['MigrationWorkloads'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MigrationWorkloads'])) {
            if (!empty($map['MigrationWorkloads'])) {
                $model->migrationWorkloads = [];
                $n1                        = 0;
                foreach ($map['MigrationWorkloads'] as $item1) {
                    $model->migrationWorkloads[$n1++] = migrationWorkloads::fromMap($item1);
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
