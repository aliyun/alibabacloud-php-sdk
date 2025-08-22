<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponseBody\data\dashboards;

class data extends Model
{
    /**
     * @var dashboards[]
     */
    public $dashboards;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'dashboards' => 'Dashboards',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->dashboards)) {
            Model::validateArray($this->dashboards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboards) {
            if (\is_array($this->dashboards)) {
                $res['Dashboards'] = [];
                $n1 = 0;
                foreach ($this->dashboards as $item1) {
                    $res['Dashboards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Dashboards'])) {
            if (!empty($map['Dashboards'])) {
                $model->dashboards = [];
                $n1 = 0;
                foreach ($map['Dashboards'] as $item1) {
                    $model->dashboards[$n1] = dashboards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
