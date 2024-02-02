<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkCards;

use AlibabaCloud\Tea\Model;

class networkCardInfo extends Model
{
    /**
     * @description The index of the network card.
     *
     * @example 1
     *
     * @var int
     */
    public $networkCardIndex;
    protected $_name = [
        'networkCardIndex' => 'NetworkCardIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkCardIndex) {
            $res['NetworkCardIndex'] = $this->networkCardIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkCardInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkCardIndex'])) {
            $model->networkCardIndex = $map['NetworkCardIndex'];
        }

        return $model;
    }
}
