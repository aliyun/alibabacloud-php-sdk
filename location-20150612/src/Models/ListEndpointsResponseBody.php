<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Location\V20150612\Models;

use AlibabaCloud\SDK\Location\V20150612\Models\ListEndpointsResponseBody\endpointList;
use AlibabaCloud\Tea\Model;

class ListEndpointsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var endpointList
     */
    public $endpointList;
    protected $_name = [
        'success'      => 'Success',
        'requestId'    => 'RequestId',
        'endpointList' => 'EndpointList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->endpointList) {
            $res['EndpointList'] = null !== $this->endpointList ? $this->endpointList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EndpointList'])) {
            $model->endpointList = endpointList::fromMap($map['EndpointList']);
        }

        return $model;
    }
}
