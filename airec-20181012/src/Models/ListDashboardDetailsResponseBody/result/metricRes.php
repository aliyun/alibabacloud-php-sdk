<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardDetailsResponseBody\result;

use AlibabaCloud\Tea\Model;

class metricRes extends Model
{
    /**
     * @var mixed[]
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $detail;
    protected $_name = [
        'total'  => 'Total',
        'detail' => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
