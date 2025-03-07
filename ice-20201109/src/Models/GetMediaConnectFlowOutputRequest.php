<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetMediaConnectFlowOutputRequest extends Model
{
    /**
     * @description The flow ID.
     *
     * This parameter is required.
     * @example 0381f478-7d53-4076-9d5f-27680a6f73e7
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The name of the output that you want to query.
     *
     * This parameter is required.
     * @example AliTestOutput
     *
     * @var string
     */
    public $outputName;
    protected $_name = [
        'flowId'     => 'FlowId',
        'outputName' => 'OutputName',
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
        if (null !== $this->outputName) {
            $res['OutputName'] = $this->outputName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaConnectFlowOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['OutputName'])) {
            $model->outputName = $map['OutputName'];
        }

        return $model;
    }
}
