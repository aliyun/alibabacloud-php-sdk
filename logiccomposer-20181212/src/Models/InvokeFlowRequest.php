<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class InvokeFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $parameters;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $definition;
    protected $_name = [
        'flowId'      => 'FlowId',
        'parameters'  => 'Parameters',
        'data'        => 'Data',
        'clientToken' => 'ClientToken',
        'definition'  => 'Definition',
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        return $model;
    }
}
