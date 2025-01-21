<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusInstanceByTagAndResourceGroupIdResponseBody\data\prometheusInstances;

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
        if (\is_array($this->prometheusInstances)) {
            Model::validateArray($this->prometheusInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusInstances) {
            if (\is_array($this->prometheusInstances)) {
                $res['PrometheusInstances'] = [];
                $n1                         = 0;
                foreach ($this->prometheusInstances as $item1) {
                    $res['PrometheusInstances'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PrometheusInstances'])) {
            if (!empty($map['PrometheusInstances'])) {
                $model->prometheusInstances = [];
                $n1                         = 0;
                foreach ($map['PrometheusInstances'] as $item1) {
                    $model->prometheusInstances[$n1++] = prometheusInstances::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
