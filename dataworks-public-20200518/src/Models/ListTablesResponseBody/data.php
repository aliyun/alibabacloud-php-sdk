<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListTablesResponseBody\data\tableEntityList;

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
     * @var int
     */
    public $total;
    protected $_name = [
        'nextToken' => 'NextToken',
        'tableEntityList' => 'TableEntityList',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->tableEntityList)) {
            Model::validateArray($this->tableEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->tableEntityList) {
            if (\is_array($this->tableEntityList)) {
                $res['TableEntityList'] = [];
                $n1 = 0;
                foreach ($this->tableEntityList as $item1) {
                    $res['TableEntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['TableEntityList'])) {
            if (!empty($map['TableEntityList'])) {
                $model->tableEntityList = [];
                $n1 = 0;
                foreach ($map['TableEntityList'] as $item1) {
                    $model->tableEntityList[$n1] = tableEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
