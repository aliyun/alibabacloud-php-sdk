<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data\tableEntityList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var tableEntityList[]
     */
    public $tableEntityList;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'nextToken'       => 'NextToken',
        'tableEntityList' => 'TableEntityList',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->tableEntityList) {
            $res['TableEntityList'] = [];
            if (null !== $this->tableEntityList && \is_array($this->tableEntityList)) {
                $n = 0;
                foreach ($this->tableEntityList as $item) {
                    $res['TableEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TableEntityList'])) {
            if (!empty($map['TableEntityList'])) {
                $model->tableEntityList = [];
                $n                      = 0;
                foreach ($map['TableEntityList'] as $item) {
                    $model->tableEntityList[$n++] = null !== $item ? tableEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
