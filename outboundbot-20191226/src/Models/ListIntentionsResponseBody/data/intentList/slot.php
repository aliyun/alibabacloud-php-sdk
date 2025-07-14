<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot\feedbackFunctions;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot\tags;
use AlibabaCloud\Tea\Model;

class slot extends Model
{
    /**
     * @var feedbackFunctions[]
     */
    public $feedbackFunctions;

    /**
     * @example test
     *
     * @var string
     */
    public $feedbackType;

    /**
     * @example 9ec31b50-32b8-11eb-9478-19d2d885afdb
     *
     * @var string
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isArray;

    /**
     * @example false
     *
     * @var bool
     */
    public $isEncrypt;

    /**
     * @example false
     *
     * @var bool
     */
    public $isInteractive;

    /**
     * @example true
     *
     * @var bool
     */
    public $isNecessary;

    /**
     * @example 0
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->feedbackFunctions) {
            $res['FeedbackFunctions'] = [];
            if (null !== $this->feedbackFunctions && \is_array($this->feedbackFunctions)) {
                $n = 0;
                foreach ($this->feedbackFunctions as $item) {
                    $res['FeedbackFunctions'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Question'] = $this->question;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeedbackFunctions'])) {
            if (!empty($map['FeedbackFunctions'])) {
                $model->feedbackFunctions = [];
                $n = 0;
                foreach ($map['FeedbackFunctions'] as $item) {
                    $model->feedbackFunctions[$n++] = null !== $item ? feedbackFunctions::fromMap($item) : $item;
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
                $model->question = $map['Question'];
            }
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
