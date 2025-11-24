<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsResponseBody\dashboards;

class DescribeGuestClusterAccessLogDashboardsResponseBody extends Model
{
    /**
     * @var dashboards[]
     */
    public $dashboards;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dashboards' => 'Dashboards',
        'k8sClusterId' => 'K8sClusterId',
        'requestId' => 'RequestId',
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

        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
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

        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
