<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListScenarioTemplatesResponseBody\scenarioTemplates\surveys;

use AlibabaCloud\Tea\Model;

class flow extends Model
{
    /**
     * @var bool
     */
    public $isPublished;

    /**
     * @var string
     */
    public $flowJson;

    /**
     * @var string
     */
    public $flowId;
    protected $_name = [
        'isPublished' => 'IsPublished',
        'flowJson'    => 'FlowJson',
        'flowId'      => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isPublished) {
            $res['IsPublished'] = $this->isPublished;
        }
        if (null !== $this->flowJson) {
            $res['FlowJson'] = $this->flowJson;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flow
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsPublished'])) {
            $model->isPublished = $map['IsPublished'];
        }
        if (isset($map['FlowJson'])) {
            $model->flowJson = $map['FlowJson'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
