<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListDashboardsResponseBody\dashboardVos;

class ListDashboardsResponseBody extends Model
{
    /**
     * @var dashboardVos[]
     */
    public $dashboardVos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dashboardVos' => 'DashboardVos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dashboardVos)) {
            Model::validateArray($this->dashboardVos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dashboardVos) {
            if (\is_array($this->dashboardVos)) {
                $res['DashboardVos'] = [];
                $n1 = 0;
                foreach ($this->dashboardVos as $item1) {
                    $res['DashboardVos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DashboardVos'])) {
            if (!empty($map['DashboardVos'])) {
                $model->dashboardVos = [];
                $n1 = 0;
                foreach ($map['DashboardVos'] as $item1) {
                    $model->dashboardVos[$n1] = dashboardVos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
