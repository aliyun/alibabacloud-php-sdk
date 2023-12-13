<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponseBody\dashboardVos;
use AlibabaCloud\Tea\Model;

class ListDashboardsResponseBody extends Model
{
    /**
     * @description The information about the Grafana dashboard.
     *
     * @var dashboardVos[]
     */
    public $dashboardVos;

    /**
     * @description The indicators of whether the Prometheus service has been activated.
     *
     * @example true
     *
     * @var string
     */
    public $prometheusServiceOpened;

    /**
     * @description The request ID.
     *
     * @example 2A0CEDF1-06FE-44AC-8E21-21A5BE65****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dashboardVos'            => 'DashboardVos',
        'prometheusServiceOpened' => 'PrometheusServiceOpened',
        'requestId'               => 'RequestId',
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
        if (null !== $this->prometheusServiceOpened) {
            $res['PrometheusServiceOpened'] = $this->prometheusServiceOpened;
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
        if (isset($map['PrometheusServiceOpened'])) {
            $model->prometheusServiceOpened = $map['PrometheusServiceOpened'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
