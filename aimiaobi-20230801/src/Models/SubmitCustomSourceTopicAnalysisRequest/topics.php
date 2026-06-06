<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomSourceTopicAnalysisRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\HottopicNews;

class topics extends Model
{
    /**
     * @var string
     */
    public $customField;

    /**
     * @var HottopicNews[]
     */
    public $news;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $topicUrl;
    protected $_name = [
        'customField' => 'CustomField',
        'news' => 'News',
        'topic' => 'Topic',
        'topicUrl' => 'TopicUrl',
    ];

    public function validate()
    {
        if (\is_array($this->news)) {
            Model::validateArray($this->news);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customField) {
            $res['CustomField'] = $this->customField;
        }

        if (null !== $this->news) {
            if (\is_array($this->news)) {
                $res['News'] = [];
                $n1 = 0;
                foreach ($this->news as $item1) {
                    $res['News'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->topicUrl) {
            $res['TopicUrl'] = $this->topicUrl;
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
        if (isset($map['CustomField'])) {
            $model->customField = $map['CustomField'];
        }

        if (isset($map['News'])) {
            if (!empty($map['News'])) {
                $model->news = [];
                $n1 = 0;
                foreach ($map['News'] as $item1) {
                    $model->news[$n1] = HottopicNews::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['TopicUrl'])) {
            $model->topicUrl = $map['TopicUrl'];
        }

        return $model;
    }
}
