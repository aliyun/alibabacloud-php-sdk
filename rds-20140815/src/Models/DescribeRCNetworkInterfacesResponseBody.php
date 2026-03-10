<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCNetworkInterfacesResponseBody\networkInterfaceSets;

class DescribeRCNetworkInterfacesResponseBody extends Model
{
    /**
     * @var networkInterfaceSets[]
     */
    public $networkInterfaceSets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkInterfaceSets' => 'NetworkInterfaceSets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterfaceSets)) {
            Model::validateArray($this->networkInterfaceSets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceSets) {
            if (\is_array($this->networkInterfaceSets)) {
                $res['NetworkInterfaceSets'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaceSets as $item1) {
                    $res['NetworkInterfaceSets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NetworkInterfaceSets'])) {
            if (!empty($map['NetworkInterfaceSets'])) {
                $model->networkInterfaceSets = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaceSets'] as $item1) {
                    $model->networkInterfaceSets[$n1] = networkInterfaceSets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
