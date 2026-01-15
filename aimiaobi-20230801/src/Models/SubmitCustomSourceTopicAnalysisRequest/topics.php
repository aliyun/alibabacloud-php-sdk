<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomSourceTopicAnalysisRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\HottopicNews;

class topics extends Model
{
    /**
     * @var HottopicNews[]
     */
    public $news;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'news' => 'News',
        'topic' => 'Topic',
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
