<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskRequest\paragraphList;
use AlibabaCloud\Tea\Model;

class GenerateImageTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example e1be065b-adc3-435e-bd01-1c18c5ed75d3
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example e1be065b-adc3-435e-bd01-1c18c5ed75d3
     *
     * @var string
     */
    public $articleTaskId;

    /**
     * @description This parameter is required.
     *
     * @var paragraphList[]
     */
    public $paragraphList;

    /**
     * @description This parameter is required.
     *
     * @example 1024*1024
     *
     * @var string
     */
    public $size;

    /**
     * @description This parameter is required.
     *
     * @example <auto>
     *
     * @var string
     */
    public $style;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'articleTaskId' => 'ArticleTaskId',
        'paragraphList' => 'ParagraphList',
        'size'          => 'Size',
        'style'         => 'Style',
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
        if (null !== $this->paragraphList) {
            $res['ParagraphList'] = [];
            if (null !== $this->paragraphList && \is_array($this->paragraphList)) {
                $n = 0;
                foreach ($this->paragraphList as $item) {
                    $res['ParagraphList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return GenerateImageTaskRequest
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
            if (!empty($map['ParagraphList'])) {
                $model->paragraphList = [];
                $n                    = 0;
                foreach ($map['ParagraphList'] as $item) {
                    $model->paragraphList[$n++] = null !== $item ? paragraphList::fromMap($item) : $item;
                }
            }
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
