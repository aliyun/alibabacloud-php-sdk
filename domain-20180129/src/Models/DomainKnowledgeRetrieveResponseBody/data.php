<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\DomainKnowledgeRetrieveResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'score' => 'Score',
        'source' => 'Source',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
