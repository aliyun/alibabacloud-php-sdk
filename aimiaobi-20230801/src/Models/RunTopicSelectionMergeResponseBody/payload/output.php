<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunTopicSelectionMergeResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\TopicSelection;

class output extends Model
{
    /**
     * @var string
     */
    public $text;

    /**
     * @var TopicSelection
     */
    public $topic;
    protected $_name = [
        'text' => 'Text',
        'topic' => 'Topic',
    ];

    public function validate()
    {
        if (null !== $this->topic) {
            $this->topic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->topic) {
            $res['Topic'] = null !== $this->topic ? $this->topic->toArray($noStream) : $this->topic;
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Topic'])) {
            $model->topic = TopicSelection::fromMap($map['Topic']);
        }

        return $model;
    }
}
