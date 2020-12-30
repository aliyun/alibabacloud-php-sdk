<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList\searchTable;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchTable) {
            $res['SearchTable'] = [];
            if (null !== $this->searchTable && \is_array($this->searchTable)) {
                $n = 0;
                foreach ($this->searchTable as $item) {
                    $res['SearchTable'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchTableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchTable'])) {
            if (!empty($map['SearchTable'])) {
                $model->searchTable = [];
                $n                  = 0;
                foreach ($map['SearchTable'] as $item) {
                    $model->searchTable[$n++] = null !== $item ? searchTable::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
