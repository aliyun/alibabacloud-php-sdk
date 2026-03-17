<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesResponseBody\qoses\qos;

class qoses extends Model
{
    /**
     * @var qos[]
     */
    public $qos;
    protected $_name = [
        'qos' => 'Qos',
    ];

    public function validate()
    {
        if (\is_array($this->qos)) {
            Model::validateArray($this->qos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qos) {
            if (\is_array($this->qos)) {
                $res['Qos'] = [];
                $n1 = 0;
                foreach ($this->qos as $item1) {
                    $res['Qos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Qos'])) {
            if (!empty($map['Qos'])) {
                $model->qos = [];
                $n1 = 0;
                foreach ($map['Qos'] as $item1) {
                    $model->qos[$n1] = qos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
