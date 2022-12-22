<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class InvokeFlowRequest extends Model
{
    /**
     * @description The token that is used to guarantee idempotence to avoid repeated operations.
     *
     * @example abcdefghijklmn
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The data for invoking the workflow.
     *
     * @example {"body": {"test": true}}
     *
     * @var string
     */
    public $data;

    /**
     * @description The parameters required by the template, which must be in JSON format.
     *
     * @example lc-abcdefg
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The input parameters required by the trigger of the workflow execution, which must be in JSON format.
     *
     * @example {"ParamA": "test"}
     *
     * @var string
     */
    public $parameters;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'data'        => 'Data',
        'flowId'      => 'FlowId',
        'parameters'  => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
