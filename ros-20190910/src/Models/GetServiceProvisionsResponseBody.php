<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetServiceProvisionsResponseBody\serviceProvisions;

class GetServiceProvisionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceProvisions[]
     */
    public $serviceProvisions;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceProvisions' => 'ServiceProvisions',
    ];

    public function validate()
    {
        if (\is_array($this->serviceProvisions)) {
            Model::validateArray($this->serviceProvisions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceProvisions) {
            if (\is_array($this->serviceProvisions)) {
                $res['ServiceProvisions'] = [];
                $n1 = 0;
                foreach ($this->serviceProvisions as $item1) {
                    $res['ServiceProvisions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceProvisions'])) {
            if (!empty($map['ServiceProvisions'])) {
                $model->serviceProvisions = [];
                $n1 = 0;
                foreach ($map['ServiceProvisions'] as $item1) {
                    $model->serviceProvisions[$n1++] = serviceProvisions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
