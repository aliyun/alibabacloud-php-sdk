<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowRequest extends Model
{
    /**
     * @description The new definition that you want to specify for the workflow.
     *
     * @example {\"schemaVersion\":\"2018-12-12\",\"actions\":{},\"version\":\"1.0.0\",\"triggers\":{}}
     *
     * @var string
     */
    public $definition;

    /**
     * @description The new description that you want to specify for the workflow.
     *
     * @example This is the description of the workflow.
     *
     * @var string
     */
    public $flowDescription;

    /**
     * @description The ID of the workflow whose information you want to update.
     *
     * @example lc-uf6axpwfcw4ubx
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The new name that you want to specify for the workflow.
     *
     * @example test
     *
     * @var string
     */
    public $flowName;
    protected $_name = [
        'definition'      => 'Definition',
        'flowDescription' => 'FlowDescription',
        'flowId'          => 'FlowId',
        'flowName'        => 'FlowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        return $model;
    }
}
