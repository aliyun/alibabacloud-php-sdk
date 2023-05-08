<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceDetailResponseBody\exposedChains;
use AlibabaCloud\Tea\Model;

class DescribeExposedInstanceDetailResponseBody extends Model
{
    /**
     * @description The UUID of the server that is exposed on the Internet.
     *
     * >  You can call the [DescribeExposedInstanceList](~~DescribeExposedInstanceList~~) operation to query the UUIDs of servers.
     * @var exposedChains[]
     */
    public $exposedChains;

    /**
     * @description The exposure details about the server.
     *
     * @example C590482B-54A7-4273-8115-9DBE2DE46B26
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exposedChains' => 'ExposedChains',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exposedChains) {
            $res['ExposedChains'] = [];
            if (null !== $this->exposedChains && \is_array($this->exposedChains)) {
                $n = 0;
                foreach ($this->exposedChains as $item) {
                    $res['ExposedChains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ExposedChains'])) {
            if (!empty($map['ExposedChains'])) {
                $model->exposedChains = [];
                $n                    = 0;
                foreach ($map['ExposedChains'] as $item) {
                    $model->exposedChains[$n++] = null !== $item ? exposedChains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
