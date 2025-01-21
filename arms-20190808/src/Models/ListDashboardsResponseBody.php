<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponseBody\dashboardVos;

class ListDashboardsResponseBody extends Model
{
    /**
     * @var dashboardVos[]
     */
    public $dashboardVos;
    /**
     * @var string
     */
    public $environmentId;
    /**
     * @var string
     */
    public $grafanaServiceOpened;
    /**
     * @var string
     */
    public $prometheusServiceOpened;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dashboardVos'            => 'DashboardVos',
        'environmentId'           => 'EnvironmentId',
        'grafanaServiceOpened'    => 'GrafanaServiceOpened',
        'prometheusServiceOpened' => 'PrometheusServiceOpened',
        'requestId'               => 'RequestId',
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
                $n1                  = 0;
                foreach ($this->dashboardVos as $item1) {
                    $res['DashboardVos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }

        if (null !== $this->grafanaServiceOpened) {
            $res['GrafanaServiceOpened'] = $this->grafanaServiceOpened;
        }

        if (null !== $this->prometheusServiceOpened) {
            $res['PrometheusServiceOpened'] = $this->prometheusServiceOpened;
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
                $n1                  = 0;
                foreach ($map['DashboardVos'] as $item1) {
                    $model->dashboardVos[$n1++] = dashboardVos::fromMap($item1);
                }
            }
        }

        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }

        if (isset($map['GrafanaServiceOpened'])) {
            $model->grafanaServiceOpened = $map['GrafanaServiceOpened'];
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
