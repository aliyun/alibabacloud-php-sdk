<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListLayer7CustomPortsResponseBody\layer7CustomPorts;

class ListLayer7CustomPortsResponseBody extends Model
{
    /**
     * @var layer7CustomPorts[]
     */
    public $layer7CustomPorts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'layer7CustomPorts' => 'Layer7CustomPorts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->layer7CustomPorts)) {
            Model::validateArray($this->layer7CustomPorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->layer7CustomPorts) {
            if (\is_array($this->layer7CustomPorts)) {
                $res['Layer7CustomPorts'] = [];
                $n1 = 0;
                foreach ($this->layer7CustomPorts as $item1) {
                    $res['Layer7CustomPorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Layer7CustomPorts'])) {
            if (!empty($map['Layer7CustomPorts'])) {
                $model->layer7CustomPorts = [];
                $n1 = 0;
                foreach ($map['Layer7CustomPorts'] as $item1) {
                    $model->layer7CustomPorts[$n1] = layer7CustomPorts::fromMap($item1);
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
