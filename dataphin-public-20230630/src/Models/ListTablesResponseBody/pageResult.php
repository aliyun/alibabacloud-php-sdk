<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListTablesResponseBody\pageResult\tableList;

class pageResult extends Model
{
    /**
     * @var tableList[]
     */
    public $tableList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'tableList' => 'TableList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tableList)) {
            Model::validateArray($this->tableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableList) {
            if (\is_array($this->tableList)) {
                $res['TableList'] = [];
                $n1 = 0;
                foreach ($this->tableList as $item1) {
                    $res['TableList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TableList'])) {
            if (!empty($map['TableList'])) {
                $model->tableList = [];
                $n1 = 0;
                foreach ($map['TableList'] as $item1) {
                    $model->tableList[$n1] = tableList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
