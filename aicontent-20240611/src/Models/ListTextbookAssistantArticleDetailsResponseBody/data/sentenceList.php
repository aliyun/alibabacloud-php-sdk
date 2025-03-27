<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantArticleDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class sentenceList extends Model
{
    /**
     * @var string
     */
    public $sentenceAnalysis;

    /**
     * @var string
     */
    public $sentenceId;

    /**
     * @var string
     */
    public $sentenceText;
    protected $_name = [
        'sentenceAnalysis' => 'sentenceAnalysis',
        'sentenceId' => 'sentenceId',
        'sentenceText' => 'sentenceText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sentenceAnalysis) {
            $res['sentenceAnalysis'] = $this->sentenceAnalysis;
        }

        if (null !== $this->sentenceId) {
            $res['sentenceId'] = $this->sentenceId;
        }

        if (null !== $this->sentenceText) {
            $res['sentenceText'] = $this->sentenceText;
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
        if (isset($map['sentenceAnalysis'])) {
            $model->sentenceAnalysis = $map['sentenceAnalysis'];
        }

        if (isset($map['sentenceId'])) {
            $model->sentenceId = $map['sentenceId'];
        }

        if (isset($map['sentenceText'])) {
            $model->sentenceText = $map['sentenceText'];
        }

        return $model;
    }
}
