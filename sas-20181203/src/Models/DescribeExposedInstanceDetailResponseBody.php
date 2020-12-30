<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;
use AlibabaCloud\Tea\Model;

class DescribeExposedInstanceDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var exposedChains[]
     */
    public $exposedChains;
    protected $_name = [
        'requestId'     => 'RequestId',
        'exposedChains' => 'ExposedChains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->exposedChains) {
            $res['ExposedChains'] = [];
            if (null !== $this->exposedChains && \is_array($this->exposedChains)) {
                $n = 0;
                foreach ($this->exposedChains as $item) {
                    $res['ExposedChains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedInstanceDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExposedChains'])) {
            if (!empty($map['ExposedChains'])) {
                $model->exposedChains = [];
                $n                    = 0;
                foreach ($map['ExposedChains'] as $item) {
                    $model->exposedChains[$n++] = null !== $item ? exposedChains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
