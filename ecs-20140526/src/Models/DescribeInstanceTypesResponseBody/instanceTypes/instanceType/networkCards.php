<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkCards\networkCardInfo;
use AlibabaCloud\Tea\Model;

class networkCards extends Model
{
    /**
     * @var networkCardInfo[]
     */
    public $networkCardInfo;
    protected $_name = [
        'networkCardInfo' => 'NetworkCardInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkCardInfo) {
            $res['NetworkCardInfo'] = [];
            if (null !== $this->networkCardInfo && \is_array($this->networkCardInfo)) {
                $n = 0;
                foreach ($this->networkCardInfo as $item) {
                    $res['NetworkCardInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkCards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkCardInfo'])) {
            if (!empty($map['NetworkCardInfo'])) {
                $model->networkCardInfo = [];
                $n                      = 0;
                foreach ($map['NetworkCardInfo'] as $item) {
                    $model->networkCardInfo[$n++] = null !== $item ? networkCardInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
