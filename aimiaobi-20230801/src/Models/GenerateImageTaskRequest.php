<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateImageTaskRequest\paragraphList;

class GenerateImageTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $articleTaskId;

    /**
     * @var paragraphList[]
     */
    public $paragraphList;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $style;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'articleTaskId' => 'ArticleTaskId',
        'paragraphList' => 'ParagraphList',
        'size' => 'Size',
        'style' => 'Style',
    ];

    public function validate()
    {
        if (\is_array($this->paragraphList)) {
            Model::validateArray($this->paragraphList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->articleTaskId) {
            $res['ArticleTaskId'] = $this->articleTaskId;
        }

        if (null !== $this->paragraphList) {
            if (\is_array($this->paragraphList)) {
                $res['ParagraphList'] = [];
                $n1 = 0;
                foreach ($this->paragraphList as $item1) {
                    $res['ParagraphList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ParagraphList'] as $item1) {
                    $model->paragraphList[$n1++] = paragraphList::fromMap($item1);
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
