<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appflow\V20230904\Models;

use AlibabaCloud\Dara\Model;

class LaunchFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowDesc;

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
    public $flowTemplate;

    /**
     * @var int
     */
    public $flowVersion;
    protected $_name = [
        'flowDesc' => 'FlowDesc',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'flowTemplate' => 'FlowTemplate',
        'flowVersion' => 'FlowVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowDesc) {
            $res['FlowDesc'] = $this->flowDesc;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->flowTemplate) {
            $res['FlowTemplate'] = $this->flowTemplate;
        }

        if (null !== $this->flowVersion) {
            $res['FlowVersion'] = $this->flowVersion;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowDesc'])) {
            $model->flowDesc = $map['FlowDesc'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['FlowTemplate'])) {
            $model->flowTemplate = $map['FlowTemplate'];
        }

        if (isset($map['FlowVersion'])) {
            $model->flowVersion = $map['FlowVersion'];
        }

        return $model;
    }
}
