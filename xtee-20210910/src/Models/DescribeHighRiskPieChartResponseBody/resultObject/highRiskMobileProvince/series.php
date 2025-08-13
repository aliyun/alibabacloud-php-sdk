<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskMobileProvince;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHighRiskPieChartResponseBody\resultObject\highRiskMobileProvince\series\data;

class series extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $roseType;
    protected $_name = [
        'data' => 'data',
        'name' => 'name',
        'roseType' => 'roseType',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->roseType) {
            $res['roseType'] = $this->roseType;
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
                    $model->data[$n1] = data::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['roseType'])) {
            $model->roseType = $map['roseType'];
        }

        return $model;
    }
}
