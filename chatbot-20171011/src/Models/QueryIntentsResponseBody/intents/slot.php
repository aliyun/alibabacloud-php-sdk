<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\QueryIntentsResponseBody\intents\slot\tags;
use AlibabaCloud\Tea\Model;

class slot extends Model
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $lifeSpan;

    /**
     * @var string
     */
    public $slotId;

    /**
     * @var bool
     */
    public $isNecessary;

    /**
     * @var bool
     */
    public $isArray;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string[]
     */
    public $question;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'value'       => 'Value',
        'lifeSpan'    => 'LifeSpan',
        'slotId'      => 'SlotId',
        'isNecessary' => 'IsNecessary',
        'isArray'     => 'IsArray',
        'tags'        => 'Tags',
        'question'    => 'Question',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->lifeSpan) {
            $res['LifeSpan'] = $this->lifeSpan;
        }
        if (null !== $this->slotId) {
            $res['SlotId'] = $this->slotId;
        }
        if (null !== $this->isNecessary) {
            $res['IsNecessary'] = $this->isNecessary;
        }
        if (null !== $this->isArray) {
            $res['IsArray'] = $this->isArray;
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
        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['LifeSpan'])) {
            $model->lifeSpan = $map['LifeSpan'];
        }
        if (isset($map['SlotId'])) {
            $model->slotId = $map['SlotId'];
        }
        if (isset($map['IsNecessary'])) {
            $model->isNecessary = $map['IsNecessary'];
        }
        if (isset($map['IsArray'])) {
            $model->isArray = $map['IsArray'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Question'])) {
            if (!empty($map['Question'])) {
                $model->question = $map['Question'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
