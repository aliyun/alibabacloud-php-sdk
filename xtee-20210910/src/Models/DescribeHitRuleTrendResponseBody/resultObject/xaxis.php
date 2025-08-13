<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeHitRuleTrendResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class xaxis extends Model
{
    /**
     * @var string[]
     */
    public $data;
    protected $_name = [
        'data' => 'data',
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
                    $res['data'][$n1] = $item1;
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    $model->data[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
