<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMigrationsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListMigrationsResponseBody\data\migrations;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the primary key.
     *
     * @var migrations[]
     */
    public $migrations;

    /**
     * @description The number of entries returned per page. Default value: 10. Maximum value: 50.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'migrations' => 'Migrations',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->migrations) {
            $res['Migrations'] = [];
            if (null !== $this->migrations && \is_array($this->migrations)) {
                $n = 0;
                foreach ($this->migrations as $item) {
                    $res['Migrations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Migrations'])) {
            if (!empty($map['Migrations'])) {
                $model->migrations = [];
                $n                 = 0;
                foreach ($map['Migrations'] as $item) {
                    $model->migrations[$n++] = null !== $item ? migrations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
