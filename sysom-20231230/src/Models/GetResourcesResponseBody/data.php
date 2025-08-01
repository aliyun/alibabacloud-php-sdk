<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2354
     *
     * @var float
     */
    public $total;

    /**
     * @example Kbytes
     *
     * @var string
     */
    public $unit;

    /**
     * @example 100
     *
     * @var float
     */
    public $usage;
    protected $_name = [
        'total' => 'total',
        'unit' => 'unit',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
