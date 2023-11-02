<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListQuickQueryResponseBody;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListQuickQueryResponseBody\data\quickQueryList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @var quickQueryList[]
     */
    public $quickQueryList;

    /**
     * @example 101
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'count'          => 'Count',
        'quickQueryList' => 'QuickQueryList',
        'total'          => 'Total',
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
        if (null !== $this->quickQueryList) {
            $res['QuickQueryList'] = [];
            if (null !== $this->quickQueryList && \is_array($this->quickQueryList)) {
                $n = 0;
                foreach ($this->quickQueryList as $item) {
                    $res['QuickQueryList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['QuickQueryList'])) {
            if (!empty($map['QuickQueryList'])) {
                $model->quickQueryList = [];
                $n                     = 0;
                foreach ($map['QuickQueryList'] as $item) {
                    $model->quickQueryList[$n++] = null !== $item ? quickQueryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
