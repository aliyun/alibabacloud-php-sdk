<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListDashboardResponseBody\dashboardItems;

class ListDashboardResponseBody extends Model
{
    /**
     * @var dashboardItems[]
     */
    public $dashboardItems;

    /**
     * @var string[]
     */
    public $dashboards;
    protected $_name = [
        'dashboardItems' => 'dashboardItems',
        'dashboards' => 'dashboards',
    ];

    public function validate()
    {
        if (\is_array($this->dashboardItems)) {
            Model::validateArray($this->dashboardItems);
        }
        if (\is_array($this->dashboards)) {
            Model::validateArray($this->dashboards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardItems) {
            if (\is_array($this->dashboardItems)) {
                $res['dashboardItems'] = [];
                $n1 = 0;
                foreach ($this->dashboardItems as $item1) {
                    $res['dashboardItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dashboards) {
            if (\is_array($this->dashboards)) {
                $res['dashboards'] = [];
                $n1 = 0;
                foreach ($this->dashboards as $item1) {
                    $res['dashboards'][$n1] = $item1;
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
        if (isset($map['dashboardItems'])) {
            if (!empty($map['dashboardItems'])) {
                $model->dashboardItems = [];
                $n1 = 0;
                foreach ($map['dashboardItems'] as $item1) {
                    $model->dashboardItems[$n1] = dashboardItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dashboards'])) {
            if (!empty($map['dashboards'])) {
                $model->dashboards = [];
                $n1 = 0;
                foreach ($map['dashboards'] as $item1) {
                    $model->dashboards[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
