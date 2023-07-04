<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionResponseBody\tunnelOptionsSpecification\tunnelOptions;
use AlibabaCloud\Tea\Model;

class tunnelOptionsSpecification extends Model
{
    /**
     * @var tunnelOptions[]
     */
    public $tunnelOptions;
    protected $_name = [
        'tunnelOptions' => 'TunnelOptions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tunnelOptions) {
            $res['TunnelOptions'] = [];
            if (null !== $this->tunnelOptions && \is_array($this->tunnelOptions)) {
                $n = 0;
                foreach ($this->tunnelOptions as $item) {
                    $res['TunnelOptions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelOptionsSpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TunnelOptions'])) {
            if (!empty($map['TunnelOptions'])) {
                $model->tunnelOptions = [];
                $n                    = 0;
                foreach ($map['TunnelOptions'] as $item) {
                    $model->tunnelOptions[$n++] = null !== $item ? tunnelOptions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
