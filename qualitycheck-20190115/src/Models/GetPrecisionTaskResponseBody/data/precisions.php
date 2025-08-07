<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data\precisions\precision;

class precisions extends Model
{
    /**
     * @var precision[]
     */
    public $precision;
    protected $_name = [
        'precision' => 'Precision',
    ];

    public function validate()
    {
        if (\is_array($this->precision)) {
            Model::validateArray($this->precision);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->precision) {
            if (\is_array($this->precision)) {
                $res['Precision'] = [];
                $n1 = 0;
                foreach ($this->precision as $item1) {
                    $res['Precision'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Precision'])) {
            if (!empty($map['Precision'])) {
                $model->precision = [];
                $n1 = 0;
                foreach ($map['Precision'] as $item1) {
                    $model->precision[$n1] = precision::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
