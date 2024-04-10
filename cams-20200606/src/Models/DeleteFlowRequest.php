<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class DeleteFlowRequest extends Model
{
    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * @example 393983883
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The Flow ID.
     *
     * @example flow_001
     *
     * @var string
     */
    public $flowId;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
        'flowId'      => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
