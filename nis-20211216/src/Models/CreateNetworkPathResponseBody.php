<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkPathResponseBody extends Model
{
    /**
     * @description The ID of the network path.
     *
     * @example np-4cbf598673d14d27****
     *
     * @var string
     */
    public $networkPathId;

    /**
     * @description The request ID.
     *
     * @example 92DD9FFB-06FB-56F7-83EF-5CEF98F5562A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkPathId' => 'NetworkPathId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPathId) {
            $res['NetworkPathId'] = $this->networkPathId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkPathResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPathId'])) {
            $model->networkPathId = $map['NetworkPathId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
