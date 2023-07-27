<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\SenderStatisticsDetailByParamResponseBody\data;
use AlibabaCloud\Tea\Model;

class SenderStatisticsDetailByParamResponseBody extends Model
{
    /**
     * @example 90f0243616#203#a***@example.net-1658817689#a***@example.net.247141122178
     *
     * @var string
     */
    public $nextStart;

    /**
     * @example B5AB8EBB-EE64-4BB2-B085-B92CC5DEDC41
     *
     * @var string
     */
    public $requestId;

    /**
     * @var data
     */
    public $data;
    protected $_name = [
        'nextStart' => 'NextStart',
        'requestId' => 'RequestId',
        'data'      => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextStart) {
            $res['NextStart'] = $this->nextStart;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SenderStatisticsDetailByParamResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextStart'])) {
            $model->nextStart = $map['NextStart'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        return $model;
    }
}
