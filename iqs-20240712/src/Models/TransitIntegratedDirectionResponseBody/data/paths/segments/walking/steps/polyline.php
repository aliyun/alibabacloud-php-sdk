<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\TransitIntegratedDirectionResponseBody\data\paths\segments\walking\steps;

use AlibabaCloud\Tea\Model;

class polyline extends Model
{
    /**
     * @example 116.467751,39.997631;116.467430,39.997631
     *
     * @var string
     */
    public $polyline;
    protected $_name = [
        'polyline' => 'polyline',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->polyline) {
            $res['polyline'] = $this->polyline;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return polyline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['polyline'])) {
            $model->polyline = $map['polyline'];
        }

        return $model;
    }
}
