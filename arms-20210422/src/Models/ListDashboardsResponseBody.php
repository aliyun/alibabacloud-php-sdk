<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\ListDashboardsResponseBody\dashboardVos;
use AlibabaCloud\Tea\Model;

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
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dashboardVos) {
            $res['DashboardVos'] = [];
            if (null !== $this->dashboardVos && \is_array($this->dashboardVos)) {
                $n = 0;
                foreach ($this->dashboardVos as $item) {
                    $res['DashboardVos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DashboardVos'])) {
            if (!empty($map['DashboardVos'])) {
                $model->dashboardVos = [];
                $n                   = 0;
                foreach ($map['DashboardVos'] as $item) {
                    $model->dashboardVos[$n++] = null !== $item ? dashboardVos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
