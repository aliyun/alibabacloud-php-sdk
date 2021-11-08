<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class SlotrecordMtopDTO extends Model
{
    /**
     * @description Id
     *
     * @var string
     */
    public $id;

    /**
     * @description IsArray
     *
     * @var bool
     */
    public $isArray;

    /**
     * @description IsNecessary
     *
     * @var bool
     */
    public $isNecessary;

    /**
     * @description LifeSpan
     *
     * @var int
     */
    public $lifeSpan;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description Question
     *
     * @var string[]
     */
    public $question;

    /**
     * @description Tags
     *
     * @var TagMtopDTO[]
     */
    public $tags;

    /**
     * @description Value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'id'          => 'Id',
        'isArray'     => 'IsArray',
        'isNecessary' => 'IsNecessary',
        'lifeSpan'    => 'LifeSpan',
        'name'        => 'Name',
        'question'    => 'Question',
        'tags'        => 'Tags',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isArray) {
            $res['IsArray'] = $this->isArray;
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
     * @return SlotrecordMtopDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsArray'])) {
            $model->isArray = $map['IsArray'];
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
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? TagMtopDTO::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
