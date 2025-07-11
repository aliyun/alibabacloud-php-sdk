<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserApiRequestResponseBody\requests;
use AlibabaCloud\Tea\Model;

class DescribeUserApiRequestResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example D13E4540-4432-5AD7-B216-6369512514F4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The statistics.
     *
     * @var requests[]
     */
    public $requests;
    protected $_name = [
        'requestId' => 'RequestId',
        'requests' => 'Requests',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requests) {
            $res['Requests'] = [];
            if (null !== $this->requests && \is_array($this->requests)) {
                $n = 0;
                foreach ($this->requests as $item) {
                    $res['Requests'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserApiRequestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Requests'])) {
            if (!empty($map['Requests'])) {
                $model->requests = [];
                $n = 0;
                foreach ($map['Requests'] as $item) {
                    $model->requests[$n++] = null !== $item ? requests::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
