<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunCustomHotTopicViewPointAnalysisResponseBody\payload;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var string[]
     */
    public $askUser;

    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $attitude;

    /**
     * @var string
     */
    public $customViewPointId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'askUser' => 'AskUser',
        'asyncTaskId' => 'AsyncTaskId',
        'attitude' => 'Attitude',
        'customViewPointId' => 'CustomViewPointId',
        'text' => 'Text',
        'topicId' => 'TopicId',
    ];

    public function validate()
    {
        if (\is_array($this->askUser)) {
            Model::validateArray($this->askUser);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->askUser) {
            if (\is_array($this->askUser)) {
                $res['AskUser'] = [];
                $n1 = 0;
                foreach ($this->askUser as $item1) {
                    $res['AskUser'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }

        if (null !== $this->attitude) {
            $res['Attitude'] = $this->attitude;
        }

        if (null !== $this->customViewPointId) {
            $res['CustomViewPointId'] = $this->customViewPointId;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
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
        if (isset($map['AskUser'])) {
            if (!empty($map['AskUser'])) {
                $model->askUser = [];
                $n1 = 0;
                foreach ($map['AskUser'] as $item1) {
                    $model->askUser[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }

        if (isset($map['Attitude'])) {
            $model->attitude = $map['Attitude'];
        }

        if (isset($map['CustomViewPointId'])) {
            $model->customViewPointId = $map['CustomViewPointId'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
