<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody;

use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var nets[]
     */
    public $nets;

    /**
     * @var int
     */
    public $num;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'nets'  => 'Nets',
        'num'   => 'Num',
        'page'  => 'Page',
        'total' => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nets) {
            $res['Nets'] = [];
            if (null !== $this->nets && \is_array($this->nets)) {
                $n = 0;
                foreach ($this->nets as $item) {
                    $res['Nets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
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
        if (isset($map['Nets'])) {
            if (!empty($map['Nets'])) {
                $model->nets = [];
                $n           = 0;
                foreach ($map['Nets'] as $item) {
                    $model->nets[$n++] = null !== $item ? nets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
