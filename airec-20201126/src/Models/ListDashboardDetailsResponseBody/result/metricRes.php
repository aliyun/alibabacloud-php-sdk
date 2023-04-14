<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListDashboardDetailsResponseBody\result;

use AlibabaCloud\Tea\Model;

class metricRes extends Model
{
    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $total;
    protected $_name = [
        'detail' => 'detail',
        'total'  => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricRes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
