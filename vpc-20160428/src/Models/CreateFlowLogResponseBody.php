<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowLogResponseBody extends Model
{
    /**
     * @description The ID of the flow log.
     *
     * @example fl-m5e8vhz2t21sel1nq****
     *
     * @var string
     */
    public $flowLogId;

    /**
     * @description The ID of the request.
     *
     * @example 54B48E3D-DF70-471B-AA93-08E683A1B457
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxazdjdhd****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the operation is successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'flowLogId'       => 'FlowLogId',
        'requestId'       => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowLogId'])) {
            $model->flowLogId = $map['FlowLogId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
