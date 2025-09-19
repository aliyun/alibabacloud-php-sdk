<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;

class DescribeExposedInstanceDetailResponseBody extends Model
{
    /**
     * @var exposedChains[]
     */
    public $exposedChains;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exposedChains' => 'ExposedChains',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->exposedChains)) {
            Model::validateArray($this->exposedChains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exposedChains) {
            if (\is_array($this->exposedChains)) {
                $res['ExposedChains'] = [];
                $n1 = 0;
                foreach ($this->exposedChains as $item1) {
                    $res['ExposedChains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExposedChains'])) {
            if (!empty($map['ExposedChains'])) {
                $model->exposedChains = [];
                $n1 = 0;
                foreach ($map['ExposedChains'] as $item1) {
                    $model->exposedChains[$n1] = exposedChains::fromMap($item1);
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
