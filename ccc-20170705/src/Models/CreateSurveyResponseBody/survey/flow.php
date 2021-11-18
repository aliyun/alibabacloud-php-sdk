<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateSurveyResponseBody\survey;

use AlibabaCloud\Tea\Model;

class flow extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowJson;

    /**
     * @var bool
     */
    public $isPublished;
    protected $_name = [
        'flowId'      => 'FlowId',
        'flowJson'    => 'FlowJson',
        'isPublished' => 'IsPublished',
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
        if (null !== $this->flowJson) {
            $res['FlowJson'] = $this->flowJson;
        }
        if (null !== $this->isPublished) {
            $res['IsPublished'] = $this->isPublished;
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
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowJson'])) {
            $model->flowJson = $map['FlowJson'];
        }
        if (isset($map['IsPublished'])) {
            $model->isPublished = $map['IsPublished'];
        }

        return $model;
    }
}
