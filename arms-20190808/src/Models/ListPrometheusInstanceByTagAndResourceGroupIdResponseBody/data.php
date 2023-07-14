<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody\data\prometheusInstances;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var prometheusInstances[]
     */
    public $prometheusInstances;
    protected $_name = [
        'prometheusInstances' => 'PrometheusInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prometheusInstances) {
            $res['PrometheusInstances'] = [];
            if (null !== $this->prometheusInstances && \is_array($this->prometheusInstances)) {
                $n = 0;
                foreach ($this->prometheusInstances as $item) {
                    $res['PrometheusInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PrometheusInstances'])) {
            if (!empty($map['PrometheusInstances'])) {
                $model->prometheusInstances = [];
                $n                          = 0;
                foreach ($map['PrometheusInstances'] as $item) {
                    $model->prometheusInstances[$n++] = null !== $item ? prometheusInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
