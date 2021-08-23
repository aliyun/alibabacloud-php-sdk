<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasSlotConfigDTO extends Model
{
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
     * @description Value
     *
     * @var string
     */
    public $value;

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
    protected $_name = [
        'isArray'     => 'IsArray',
        'isNecessary' => 'IsNecessary',
        'value'       => 'Value',
        'lifeSpan'    => 'LifeSpan',
        'name'        => 'Name',
        'question'    => 'Question',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isArray) {
            $res['IsArray'] = $this->isArray;
        }
        if (null !== $this->isNecessary) {
            $res['IsNecessary'] = $this->isNecessary;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasSlotConfigDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsArray'])) {
            $model->isArray = $map['IsArray'];
        }
        if (isset($map['IsNecessary'])) {
            $model->isNecessary = $map['IsNecessary'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
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

        return $model;
    }
}
