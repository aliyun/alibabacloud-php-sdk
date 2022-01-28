<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworksResponseBody\networks\network;
use AlibabaCloud\Tea\Model;

class networks extends Model
{
    /**
     * @var network[]
     */
    public $network;
    protected $_name = [
        'network' => 'Network',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->network) {
            $res['Network'] = [];
            if (null !== $this->network && \is_array($this->network)) {
                $n = 0;
                foreach ($this->network as $item) {
                    $res['Network'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Network'])) {
            if (!empty($map['Network'])) {
                $model->network = [];
                $n              = 0;
                foreach ($map['Network'] as $item) {
                    $model->network[$n++] = null !== $item ? network::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
