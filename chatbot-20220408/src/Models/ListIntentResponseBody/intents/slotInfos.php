<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentResponseBody\intents;

use AlibabaCloud\Dara\Model;

class slotInfos extends Model
{
    /**
     * @var bool
     */
    public $array;

    /**
     * @var bool
     */
    public $encrypt;

    /**
     * @var bool
     */
    public $interactive;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $slotId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'array' => 'Array',
        'encrypt' => 'Encrypt',
        'interactive' => 'Interactive',
        'name' => 'Name',
        'slotId' => 'SlotId',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->array) {
            $res['Array'] = $this->array;
        }

        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }

        if (null !== $this->interactive) {
            $res['Interactive'] = $this->interactive;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->slotId) {
            $res['SlotId'] = $this->slotId;
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
        if (isset($map['Array'])) {
            $model->array = $map['Array'];
        }

        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }

        if (isset($map['Interactive'])) {
            $model->interactive = $map['Interactive'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SlotId'])) {
            $model->slotId = $map['SlotId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
