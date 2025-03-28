<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20191209\Models\DescribeInstanceStorageResponseBody\instanceStorages;

class DescribeInstanceStorageResponseBody extends Model
{
    /**
     * @var instanceStorages[]
     */
    public $instanceStorages;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceStorages' => 'InstanceStorages',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceStorages)) {
            Model::validateArray($this->instanceStorages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceStorages) {
            if (\is_array($this->instanceStorages)) {
                $res['InstanceStorages'] = [];
                $n1 = 0;
                foreach ($this->instanceStorages as $item1) {
                    $res['InstanceStorages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceStorages'])) {
            if (!empty($map['InstanceStorages'])) {
                $model->instanceStorages = [];
                $n1 = 0;
                foreach ($map['InstanceStorages'] as $item1) {
                    $model->instanceStorages[$n1++] = instanceStorages::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
