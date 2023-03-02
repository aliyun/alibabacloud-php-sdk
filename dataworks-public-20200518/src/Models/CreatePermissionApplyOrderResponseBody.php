<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreatePermissionApplyOrderResponseBody extends Model
{
    /**
     * @description The ID of the request order. If you request permissions on multiple objects but each object has a different request approver, one request order is generated for each object and is sent to the related approver. In this case, an array is returned.
     *
     * @var string[]
     */
    public $flowId;

    /**
     * @description The ID of the request.
     *
     * @example 0bc1ec92159376****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'flowId'    => 'FlowId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePermissionApplyOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            if (!empty($map['FlowId'])) {
                $model->flowId = $map['FlowId'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
