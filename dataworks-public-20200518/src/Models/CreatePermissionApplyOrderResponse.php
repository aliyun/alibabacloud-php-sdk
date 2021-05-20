<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreatePermissionApplyOrderResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $flowId;
    protected $_name = [
        'requestId' => 'RequestId',
        'flowId'    => 'FlowId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('flowId', $this->flowId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePermissionApplyOrderResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowId'])) {
            if (!empty($map['FlowId'])) {
                $model->flowId = $map['FlowId'];
            }
        }

        return $model;
    }
}
