<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterPodsResponseBody extends Model
{
    /**
     * @description The names of the queried pods.
     *
     * @var string[]
     */
    public $podList;

    /**
     * @description The ID of the request.
     *
     * @example EDDC0D86-2FC3-56FB-9213-96EB0A3523F1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'podList'   => 'PodList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->podList) {
            $res['PodList'] = $this->podList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGuestClusterPodsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PodList'])) {
            if (!empty($map['PodList'])) {
                $model->podList = $map['PodList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
