<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessPathsResponseBody\networkAccessPaths;
use AlibabaCloud\Tea\Model;

class ListNetworkAccessPathsResponseBody extends Model
{
    /**
     * @var networkAccessPaths[]
     */
    public $networkAccessPaths;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkAccessPaths' => 'NetworkAccessPaths',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAccessPaths) {
            $res['NetworkAccessPaths'] = [];
            if (null !== $this->networkAccessPaths && \is_array($this->networkAccessPaths)) {
                $n = 0;
                foreach ($this->networkAccessPaths as $item) {
                    $res['NetworkAccessPaths'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListNetworkAccessPathsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAccessPaths'])) {
            if (!empty($map['NetworkAccessPaths'])) {
                $model->networkAccessPaths = [];
                $n                         = 0;
                foreach ($map['NetworkAccessPaths'] as $item) {
                    $model->networkAccessPaths[$n++] = null !== $item ? networkAccessPaths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
