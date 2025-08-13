<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartResponseBody\resultObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeRuleBarChartResponseBody\resultObject\series\data;

class series extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'data',
        'type' => 'type',
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
