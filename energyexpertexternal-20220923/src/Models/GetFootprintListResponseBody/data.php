<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetFootprintListResponseBody\data\records;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'records' => 'records',
        'total' => 'total',
        'totalPage' => 'totalPage',
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
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->totalPage) {
            $res['totalPage'] = $this->totalPage;
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
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

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['totalPage'])) {
            $model->totalPage = $map['totalPage'];
        }

        return $model;
    }
}
