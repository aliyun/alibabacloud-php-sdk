<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\networkInterfaceAttributes\networkInterfaceAttribute;
use AlibabaCloud\Tea\Model;

class networkInterfaceAttributes extends Model
{
    /**
     * @var networkInterfaceAttribute[]
     */
    public $networkInterfaceAttribute;
    protected $_name = [
        'networkInterfaceAttribute' => 'NetworkInterfaceAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkInterfaceAttribute) {
            $res['NetworkInterfaceAttribute'] = [];
            if (null !== $this->networkInterfaceAttribute && \is_array($this->networkInterfaceAttribute)) {
                $n = 0;
                foreach ($this->networkInterfaceAttribute as $item) {
                    $res['NetworkInterfaceAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInterfaceAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkInterfaceAttribute'])) {
            if (!empty($map['NetworkInterfaceAttribute'])) {
                $model->networkInterfaceAttribute = [];
                $n                                = 0;
                foreach ($map['NetworkInterfaceAttribute'] as $item) {
                    $model->networkInterfaceAttribute[$n++] = null !== $item ? networkInterfaceAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
