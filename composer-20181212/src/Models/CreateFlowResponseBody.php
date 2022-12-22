<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowResponseBody extends Model
{
    /**
     * @description The ID of the created workflow.
     *
     * @example lc-utf6abcdefg
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The ID of the request.
     *
     * @example D264C934-2DA8-44B4-B034-C659A63AC659
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
     * @return CreateFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
