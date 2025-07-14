<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\slot\feedbackFunctions;

use AlibabaCloud\Tea\Model;

class switch_ extends Model
{
    /**
     * @example b9932604-08ae-4525-bbe5-c8cce3066070
     *
     * @var string
     */
    public $id;

    /**
     * @example SQL_SUB_QUERY
     *
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $name;

    /**
     * @example PASSKEY
     *
     * @var string
     */
    public $type;

    /**
     * @example BASE_VALIDATE_FILTER_SWITCH
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'id' => 'Id',
        'label' => 'Label',
        'name' => 'Name',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return switch_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
