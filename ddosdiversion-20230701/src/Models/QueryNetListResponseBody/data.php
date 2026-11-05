<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets;

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
        'nets' => 'Nets',
        'num' => 'Num',
        'page' => 'Page',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->nets)) {
            Model::validateArray($this->nets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nets) {
            if (\is_array($this->nets)) {
                $res['Nets'] = [];
                $n1 = 0;
                foreach ($this->nets as $item1) {
                    $res['Nets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nets'])) {
            if (!empty($map['Nets'])) {
                $model->nets = [];
                $n1 = 0;
                foreach ($map['Nets'] as $item1) {
                    $model->nets[$n1] = nets::fromMap($item1);
                    ++$n1;
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
