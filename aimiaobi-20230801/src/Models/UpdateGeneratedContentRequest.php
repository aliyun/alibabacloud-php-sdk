<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class UpdateGeneratedContentRequest extends Model
{
    /**
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 正文
     *
     * @var string
     */
    public $content;

    /**
     * @example 正文
     *
     * @var string
     */
    public $contentText;

    /**
     * @example 36
     *
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @example 创作xx文章
     *
     * @var string
     */
    public $prompt;

    /**
     * @example 评论类文章
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'content'     => 'Content',
        'contentText' => 'ContentText',
        'id'          => 'Id',
        'keywords'    => 'Keywords',
        'prompt'      => 'Prompt',
        'title'       => 'Title',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentText) {
            $res['ContentText'] = $this->contentText;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGeneratedContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentText'])) {
            $model->contentText = $map['ContentText'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
