<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\SearchTlogResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $took;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $trend;
    protected $_name = [
        'data' => 'Data',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'took' => 'Took',
        'total' => 'Total',
        'trend' => 'Trend',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->trend)) {
            Model::validateArray($this->trend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->took) {
            $res['Took'] = $this->took;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->trend) {
            if (\is_array($this->trend)) {
                $res['Trend'] = [];
                $n1 = 0;
                foreach ($this->trend as $item1) {
                    $res['Trend'][$n1] = $item1;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Took'])) {
            $model->took = $map['Took'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['Trend'])) {
            if (!empty($map['Trend'])) {
                $model->trend = [];
                $n1 = 0;
                foreach ($map['Trend'] as $item1) {
                    $model->trend[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
