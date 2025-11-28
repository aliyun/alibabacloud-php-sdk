<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\ListPrivateTTSVoicesCustomResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var data\data[]
     */
    public $data;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pages;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'data' => 'data',
        'page' => 'page',
        'pages' => 'pages',
        'size' => 'size',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['data'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pages) {
            $res['pages'] = $this->pages;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1] = data\data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pages'])) {
            $model->pages = $map['pages'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
