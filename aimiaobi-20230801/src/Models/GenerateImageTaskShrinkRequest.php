<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GenerateImageTaskShrinkRequest extends Model
{
    /**
     * @example e1be065b-adc3-435e-bd01-1c18c5ed75d3
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example e1be065b-adc3-435e-bd01-1c18c5ed75d3
     *
     * @var string
     */
    public $articleTaskId;

    /**
     * @var string
     */
    public $paragraphListShrink;

    /**
     * @example 1024*1024
     *
     * @var string
     */
    public $size;

    /**
     * @example <auto>
     *
     * @var string
     */
    public $style;
    protected $_name = [
        'agentKey'            => 'AgentKey',
        'articleTaskId'       => 'ArticleTaskId',
        'paragraphListShrink' => 'ParagraphList',
        'size'                => 'Size',
        'style'               => 'Style',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->articleTaskId) {
            $res['ArticleTaskId'] = $this->articleTaskId;
        }
        if (null !== $this->paragraphListShrink) {
            $res['ParagraphList'] = $this->paragraphListShrink;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateImageTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ArticleTaskId'])) {
            $model->articleTaskId = $map['ArticleTaskId'];
        }
        if (isset($map['ParagraphList'])) {
            $model->paragraphListShrink = $map['ParagraphList'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }

        return $model;
    }
}
