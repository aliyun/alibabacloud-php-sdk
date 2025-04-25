<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot\feedbackFunctions;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot\tags;

class slot extends Model
{
    /**
     * @var feedbackFunctions[]
     */
    public $feedbackFunctions;

    /**
     * @var string
     */
    public $feedbackType;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isArray;

    /**
     * @var bool
     */
    public $isEncrypt;

    /**
     * @var bool
     */
    public $isInteractive;

    /**
     * @var bool
     */
    public $isNecessary;

    /**
     * @var int
     */
    public $lifeSpan;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $question;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'feedbackFunctions' => 'FeedbackFunctions',
        'feedbackType' => 'FeedbackType',
        'id' => 'Id',
        'isArray' => 'IsArray',
        'isEncrypt' => 'IsEncrypt',
        'isInteractive' => 'IsInteractive',
        'isNecessary' => 'IsNecessary',
        'lifeSpan' => 'LifeSpan',
        'name' => 'Name',
        'question' => 'Question',
        'tags' => 'Tags',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->feedbackFunctions)) {
            Model::validateArray($this->feedbackFunctions);
        }
        if (\is_array($this->question)) {
            Model::validateArray($this->question);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feedbackFunctions) {
            if (\is_array($this->feedbackFunctions)) {
                $res['FeedbackFunctions'] = [];
                $n1 = 0;
                foreach ($this->feedbackFunctions as $item1) {
                    $res['FeedbackFunctions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->feedbackType) {
            $res['FeedbackType'] = $this->feedbackType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isArray) {
            $res['IsArray'] = $this->isArray;
        }

        if (null !== $this->isEncrypt) {
            $res['IsEncrypt'] = $this->isEncrypt;
        }

        if (null !== $this->isInteractive) {
            $res['IsInteractive'] = $this->isInteractive;
        }

        if (null !== $this->isNecessary) {
            $res['IsNecessary'] = $this->isNecessary;
        }

        if (null !== $this->lifeSpan) {
            $res['LifeSpan'] = $this->lifeSpan;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->question) {
            if (\is_array($this->question)) {
                $res['Question'] = [];
                $n1 = 0;
                foreach ($this->question as $item1) {
                    $res['Question'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['FeedbackFunctions'])) {
            if (!empty($map['FeedbackFunctions'])) {
                $model->feedbackFunctions = [];
                $n1 = 0;
                foreach ($map['FeedbackFunctions'] as $item1) {
                    $model->feedbackFunctions[$n1++] = feedbackFunctions::fromMap($item1);
                }
            }
        }

        if (isset($map['FeedbackType'])) {
            $model->feedbackType = $map['FeedbackType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsArray'])) {
            $model->isArray = $map['IsArray'];
        }

        if (isset($map['IsEncrypt'])) {
            $model->isEncrypt = $map['IsEncrypt'];
        }

        if (isset($map['IsInteractive'])) {
            $model->isInteractive = $map['IsInteractive'];
        }

        if (isset($map['IsNecessary'])) {
            $model->isNecessary = $map['IsNecessary'];
        }

        if (isset($map['LifeSpan'])) {
            $model->lifeSpan = $map['LifeSpan'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Question'])) {
            if (!empty($map['Question'])) {
                $model->question = [];
                $n1 = 0;
                foreach ($map['Question'] as $item1) {
                    $model->question[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
