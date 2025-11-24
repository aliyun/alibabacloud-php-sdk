<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshVMsResponseBody\VMs;

class DescribeServiceMeshVMsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var VMs[]
     */
    public $VMs;
    protected $_name = [
        'requestId' => 'RequestId',
        'VMs' => 'VMs',
    ];

    public function validate()
    {
        if (\is_array($this->VMs)) {
            Model::validateArray($this->VMs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->VMs) {
            if (\is_array($this->VMs)) {
                $res['VMs'] = [];
                $n1 = 0;
                foreach ($this->VMs as $item1) {
                    $res['VMs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VMs'])) {
            if (!empty($map['VMs'])) {
                $model->VMs = [];
                $n1 = 0;
                foreach ($map['VMs'] as $item1) {
                    $model->VMs[$n1] = VMs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
