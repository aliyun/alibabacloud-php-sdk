<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosCarsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosCarsResponseBody\qosCars\qosCar;

class qosCars extends Model
{
    /**
     * @var qosCar[]
     */
    public $qosCar;
    protected $_name = [
        'qosCar' => 'QosCar',
    ];

    public function validate()
    {
        if (\is_array($this->qosCar)) {
            Model::validateArray($this->qosCar);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosCar) {
            if (\is_array($this->qosCar)) {
                $res['QosCar'] = [];
                $n1 = 0;
                foreach ($this->qosCar as $item1) {
                    $res['QosCar'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['QosCar'])) {
            if (!empty($map['QosCar'])) {
                $model->qosCar = [];
                $n1 = 0;
                foreach ($map['QosCar'] as $item1) {
                    $model->qosCar[$n1] = qosCar::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
