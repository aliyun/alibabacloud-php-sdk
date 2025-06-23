<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceSpecsResponseBody\instanceSpecs;

class DescribeInstanceSpecsResponseBody extends Model
{
    /**
     * @var instanceSpecs[]
     */
    public $instanceSpecs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceSpecs' => 'InstanceSpecs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceSpecs)) {
            Model::validateArray($this->instanceSpecs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceSpecs) {
            if (\is_array($this->instanceSpecs)) {
                $res['InstanceSpecs'] = [];
                $n1 = 0;
                foreach ($this->instanceSpecs as $item1) {
                    $res['InstanceSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceSpecs'])) {
            if (!empty($map['InstanceSpecs'])) {
                $model->instanceSpecs = [];
                $n1 = 0;
                foreach ($map['InstanceSpecs'] as $item1) {
                    $model->instanceSpecs[$n1] = instanceSpecs::fromMap($item1);
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
