<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaConnectFlowStatusRequest extends Model
{
    /**
     * @description The flow ID.
     *
     * This parameter is required.
     * @example 34900dc6-90ec-4968-af3c-fcd87f231a5f
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The flow state. Valid values:
     *
     *   online: starts the flow.
     *   offline: stops the flow.
     *
     * This parameter is required.
     * @example online
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'flowId' => 'FlowId',
        'status' => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaConnectFlowStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
