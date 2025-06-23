<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCustomPortsResponseBody\webCustomPorts;

class DescribeWebCustomPortsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var webCustomPorts[]
     */
    public $webCustomPorts;
    protected $_name = [
        'requestId' => 'RequestId',
        'webCustomPorts' => 'WebCustomPorts',
    ];

    public function validate()
    {
        if (\is_array($this->webCustomPorts)) {
            Model::validateArray($this->webCustomPorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->webCustomPorts) {
            if (\is_array($this->webCustomPorts)) {
                $res['WebCustomPorts'] = [];
                $n1 = 0;
                foreach ($this->webCustomPorts as $item1) {
                    $res['WebCustomPorts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['WebCustomPorts'])) {
            if (!empty($map['WebCustomPorts'])) {
                $model->webCustomPorts = [];
                $n1 = 0;
                foreach ($map['WebCustomPorts'] as $item1) {
                    $model->webCustomPorts[$n1] = webCustomPorts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
