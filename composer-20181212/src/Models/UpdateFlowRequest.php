<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowDescription;

    /**
     * @var string
     */
    public $definition;
    protected $_name = [
        'flowId'          => 'FlowId',
        'flowName'        => 'FlowName',
        'flowDescription' => 'FlowDescription',
        'definition'      => 'Definition',
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
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        return $model;
    }
}
