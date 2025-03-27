<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ListTextbookAssistantSceneDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;

class wordList extends Model
{
    /**
     * @var string
     */
    public $wordAnalysis;

    /**
     * @var string
     */
    public $wordId;

    /**
     * @var string
     */
    public $wordText;
    protected $_name = [
        'wordAnalysis' => 'wordAnalysis',
        'wordId' => 'wordId',
        'wordText' => 'wordText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wordAnalysis) {
            $res['wordAnalysis'] = $this->wordAnalysis;
        }

        if (null !== $this->wordId) {
            $res['wordId'] = $this->wordId;
        }

        if (null !== $this->wordText) {
            $res['wordText'] = $this->wordText;
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
        if (isset($map['wordAnalysis'])) {
            $model->wordAnalysis = $map['wordAnalysis'];
        }

        if (isset($map['wordId'])) {
            $model->wordId = $map['wordId'];
        }

        if (isset($map['wordText'])) {
            $model->wordText = $map['wordText'];
        }

        return $model;
    }
}
