<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListChunksResponseBody\data;

use AlibabaCloud\Dara\Model;

class nodes extends Model
{
    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'metadata' => 'Metadata',
        'score' => 'Score',
        'text' => 'Text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
