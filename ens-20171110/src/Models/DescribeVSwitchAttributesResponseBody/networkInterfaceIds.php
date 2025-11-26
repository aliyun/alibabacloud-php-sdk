<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeVSwitchAttributesResponseBody;

use AlibabaCloud\Dara\Model;

class networkInterfaceIds extends Model
{
    /**
     * @var string[]
     */
    public $networkInterfaceId;
    protected $_name = [
        'networkInterfaceId' => 'NetworkInterfaceId',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterfaceId)) {
            Model::validateArray($this->networkInterfaceId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInterfaceId) {
            if (\is_array($this->networkInterfaceId)) {
                $res['NetworkInterfaceId'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaceId as $item1) {
                    $res['NetworkInterfaceId'][$n1] = $item1;
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
        if (isset($map['NetworkInterfaceId'])) {
            if (!empty($map['NetworkInterfaceId'])) {
                $model->networkInterfaceId = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaceId'] as $item1) {
                    $model->networkInterfaceId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
