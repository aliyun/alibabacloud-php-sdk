<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestOriginStatByInstanceIdResponseBody;

use AlibabaCloud\SDK\DAS\V20200116\Models\GetFullRequestOriginStatByInstanceIdResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of the full request data.
     *
     * @var list_[]
     */
    public $list;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'list' => 'List',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
