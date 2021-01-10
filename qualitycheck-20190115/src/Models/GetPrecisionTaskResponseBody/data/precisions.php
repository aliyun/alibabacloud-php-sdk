<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetPrecisionTaskResponseBody\data\precisions\precision;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->precision) {
            $res['Precision'] = [];
            if (null !== $this->precision && \is_array($this->precision)) {
                $n = 0;
                foreach ($this->precision as $item) {
                    $res['Precision'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return precisions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Precision'])) {
            if (!empty($map['Precision'])) {
                $model->precision = [];
                $n                = 0;
                foreach ($map['Precision'] as $item) {
                    $model->precision[$n++] = null !== $item ? precision::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
