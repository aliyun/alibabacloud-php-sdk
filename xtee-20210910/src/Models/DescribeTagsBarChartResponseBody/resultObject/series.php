<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsBarChartResponseBody\resultObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTagsBarChartResponseBody\resultObject\series\data;

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
    public $stack;
    protected $_name = [
        'data' => 'data',
        'name' => 'name',
        'stack' => 'stack',
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

        if (null !== $this->stack) {
            $res['stack'] = $this->stack;
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

        if (isset($map['stack'])) {
            $model->stack = $map['stack'];
        }

        return $model;
    }
}
