<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourcePortResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $resourcePorts;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourcePorts' => 'ResourcePorts',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePorts)) {
            Model::validateArray($this->resourcePorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourcePorts) {
            if (\is_array($this->resourcePorts)) {
                $res['ResourcePorts'] = [];
                $n1                   = 0;
                foreach ($this->resourcePorts as $item1) {
                    $res['ResourcePorts'][$n1++] = $item1;
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

        if (isset($map['ResourcePorts'])) {
            if (!empty($map['ResourcePorts'])) {
                $model->resourcePorts = [];
                $n1                   = 0;
                foreach ($map['ResourcePorts'] as $item1) {
                    $model->resourcePorts[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
