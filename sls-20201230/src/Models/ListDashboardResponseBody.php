<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardResponseBody\dashboardItems;
use AlibabaCloud\Tea\Model;

class ListDashboardResponseBody extends Model
{
    /**
     * @description The details of the dashboard.
     *
     * @var dashboardItems[]
     */
    public $dashboardItems;

    /**
     * @description The queried dashboards. Each dashboard in the array is specified by dashboardName.
     *
     * @var string[]
     */
    public $dashboards;
    protected $_name = [
        'dashboardItems' => 'dashboardItems',
        'dashboards'     => 'dashboards',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardItems) {
            $res['dashboardItems'] = [];
            if (null !== $this->dashboardItems && \is_array($this->dashboardItems)) {
                $n = 0;
                foreach ($this->dashboardItems as $item) {
                    $res['dashboardItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dashboards) {
            $res['dashboards'] = $this->dashboards;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dashboardItems'])) {
            if (!empty($map['dashboardItems'])) {
                $model->dashboardItems = [];
                $n                     = 0;
                foreach ($map['dashboardItems'] as $item) {
                    $model->dashboardItems[$n++] = null !== $item ? dashboardItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dashboards'])) {
            if (!empty($map['dashboards'])) {
                $model->dashboards = $map['dashboards'];
            }
        }

        return $model;
    }
}
