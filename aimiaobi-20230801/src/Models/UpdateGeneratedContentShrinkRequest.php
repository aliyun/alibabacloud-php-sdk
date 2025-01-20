<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class UpdateGeneratedContentShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string
     */
    public $content;
    /**
     * @var string
     */
    public $contentText;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $keywordsShrink;
    /**
     * @var string
     */
    public $prompt;
    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'content'        => 'Content',
        'contentText'    => 'ContentText',
        'id'             => 'Id',
        'keywordsShrink' => 'Keywords',
        'prompt'         => 'Prompt',
        'title'          => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->keywordsShrink) {
            $res['Keywords'] = $this->keywordsShrink;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
            $model->keywordsShrink = $map['Keywords'];
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
