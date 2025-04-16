<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType\networkCards\networkCardInfo;

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
        if (\is_array($this->networkCardInfo)) {
            Model::validateArray($this->networkCardInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkCardInfo) {
            if (\is_array($this->networkCardInfo)) {
                $res['NetworkCardInfo'] = [];
                $n1 = 0;
                foreach ($this->networkCardInfo as $item1) {
                    $res['NetworkCardInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetworkCardInfo'])) {
            if (!empty($map['NetworkCardInfo'])) {
                $model->networkCardInfo = [];
                $n1 = 0;
                foreach ($map['NetworkCardInfo'] as $item1) {
                    $model->networkCardInfo[$n1++] = networkCardInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
