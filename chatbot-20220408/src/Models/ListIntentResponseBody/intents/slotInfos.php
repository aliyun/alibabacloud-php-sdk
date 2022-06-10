<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListIntentResponseBody\intents;

use AlibabaCloud\Tea\Model;

class slotInfos extends Model
{
    /**
     * @description 是否数组
     *
     * @var bool
     */
    public $array;

    /**
     * @description 是否敏感
     *
     * @var bool
     */
    public $encrypt;

    /**
     * @description 是否交互式收集
     *
     * @var bool
     */
    public $interactive;

    /**
     * @description 槽位名
     *
     * @var string
     */
    public $name;

    /**
     * @description 槽位ID
     *
     * @var string
     */
    public $slotId;

    /**
     * @description 槽位值（实体名）
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'array'       => 'Array',
        'encrypt'     => 'Encrypt',
        'interactive' => 'Interactive',
        'name'        => 'Name',
        'slotId'      => 'SlotId',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return slotInfos
     */
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
