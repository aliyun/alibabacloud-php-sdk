<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\loadBalancers\loadBalancer;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeEnvResourceResponseBody\envResource\loadBalancers\loadBalancer\listeners\listener;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var listener[]
     */
    public $listener;
    protected $_name = [
        'listener' => 'Listener',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listener) {
            $res['Listener'] = [];
            if (null !== $this->listener && \is_array($this->listener)) {
                $n = 0;
                foreach ($this->listener as $item) {
                    $res['Listener'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listener'])) {
            if (!empty($map['Listener'])) {
                $model->listener = [];
                $n               = 0;
                foreach ($map['Listener'] as $item) {
                    $model->listener[$n++] = null !== $item ? listener::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
