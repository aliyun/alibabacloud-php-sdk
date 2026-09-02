<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MilvusKnowledgeBase\V20260604\Models\SearchKnowledgeBaseResponseBody\results;

use AlibabaCloud\Dara\Model;

class mediaTimeline extends Model
{
    /**
     * @var int
     */
    public $endMs;

    /**
     * @var int
     */
    public $startMs;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'endMs' => 'endMs',
        'startMs' => 'startMs',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endMs) {
            $res['endMs'] = $this->endMs;
        }

        if (null !== $this->startMs) {
            $res['startMs'] = $this->startMs;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['endMs'])) {
            $model->endMs = $map['endMs'];
        }

        if (isset($map['startMs'])) {
            $model->startMs = $map['startMs'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
