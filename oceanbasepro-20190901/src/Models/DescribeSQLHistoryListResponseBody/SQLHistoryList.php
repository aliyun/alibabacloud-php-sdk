<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSQLHistoryListResponseBody\SQLHistoryList\list_;
use AlibabaCloud\Tea\Model;

class SQLHistoryList extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'count' => 'Count',
        'list'  => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLHistoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
