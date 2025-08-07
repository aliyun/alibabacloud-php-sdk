<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeDomainUsedPortsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int[]
     */
    public $usedPorts;
    protected $_name = [
        'requestId' => 'RequestId',
        'usedPorts' => 'UsedPorts',
    ];

    public function validate()
    {
        if (\is_array($this->usedPorts)) {
            Model::validateArray($this->usedPorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usedPorts) {
            if (\is_array($this->usedPorts)) {
                $res['UsedPorts'] = [];
                $n1 = 0;
                foreach ($this->usedPorts as $item1) {
                    $res['UsedPorts'][$n1] = $item1;
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

        if (isset($map['UsedPorts'])) {
            if (!empty($map['UsedPorts'])) {
                $model->usedPorts = [];
                $n1 = 0;
                foreach ($map['UsedPorts'] as $item1) {
                    $model->usedPorts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
