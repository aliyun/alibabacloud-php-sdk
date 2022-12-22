<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CloneFlowResponseBody extends Model
{
    /**
     * @description The ID of the cloned workflow.
     *
     * @example lc-uf6wvbsyvvl5sy
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The ID of the request.
     *
     * @example ADB97A33-50E7-48A5-963D-ACBAE36D0BEC
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
     * @return CloneFlowResponseBody
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
