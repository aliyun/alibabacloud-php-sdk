<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanListResponseBody\data\records;

class data extends Model
{
    /**
     * @var int
     */
    public $current;

    /**
     * @var int
     */
    public $pages;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'current' => 'current',
        'pages' => 'pages',
        'records' => 'records',
        'size' => 'size',
        'total' => 'total',
    ];

    public function validate()
    {
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }

        if (null !== $this->pages) {
            $res['pages'] = $this->pages;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['records'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }

        if (isset($map['pages'])) {
            $model->pages = $map['pages'];
        }

        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['records'] as $item1) {
                    $model->records[$n1++] = records::fromMap($item1);
                }
            }
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
