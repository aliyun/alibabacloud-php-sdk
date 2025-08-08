<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList\searchTable;

class searchTableList extends Model
{
    /**
     * @var searchTable[]
     */
    public $searchTable;
    protected $_name = [
        'searchTable' => 'SearchTable',
    ];

    public function validate()
    {
        if (\is_array($this->searchTable)) {
            Model::validateArray($this->searchTable);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->searchTable) {
            if (\is_array($this->searchTable)) {
                $res['SearchTable'] = [];
                $n1 = 0;
                foreach ($this->searchTable as $item1) {
                    $res['SearchTable'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['SearchTable'])) {
            if (!empty($map['SearchTable'])) {
                $model->searchTable = [];
                $n1 = 0;
                foreach ($map['SearchTable'] as $item1) {
                    $model->searchTable[$n1] = searchTable::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
