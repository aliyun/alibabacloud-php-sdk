<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\networkInterfaceAttributes\networkInterfaceAttribute;

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
        if (\is_array($this->networkInterfaceAttribute)) {
            Model::validateArray($this->networkInterfaceAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceAttribute) {
            if (\is_array($this->networkInterfaceAttribute)) {
                $res['NetworkInterfaceAttribute'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaceAttribute as $item1) {
                    $res['NetworkInterfaceAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NetworkInterfaceAttribute'])) {
            if (!empty($map['NetworkInterfaceAttribute'])) {
                $model->networkInterfaceAttribute = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaceAttribute'] as $item1) {
                    $model->networkInterfaceAttribute[$n1] = networkInterfaceAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
