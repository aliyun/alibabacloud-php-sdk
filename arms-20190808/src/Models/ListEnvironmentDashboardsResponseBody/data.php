<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponseBody\data\dashboards;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description List of dashboard.
     *
     * @var dashboards[]
     */
    public $dashboards;

    /**
     * @description Totle of the dashboards.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'dashboards' => 'Dashboards',
        'total'      => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboards) {
            $res['Dashboards'] = [];
            if (null !== $this->dashboards && \is_array($this->dashboards)) {
                $n = 0;
                foreach ($this->dashboards as $item) {
                    $res['Dashboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Dashboards'])) {
            if (!empty($map['Dashboards'])) {
                $model->dashboards = [];
                $n                 = 0;
                foreach ($map['Dashboards'] as $item) {
                    $model->dashboards[$n++] = null !== $item ? dashboards::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
