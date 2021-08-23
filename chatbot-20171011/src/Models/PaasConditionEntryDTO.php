<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasConditionEntryDTO extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description Term
     *
     * @var string
     */
    public $term;

    /**
     * @description Name
     *
     * @var string
     */
    public $name;

    /**
     * @description Type
     *
     * @var string
     */
    public $type;

    /**
     * @description Value
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'id'    => 'id',
        'term'  => 'Term',
        'name'  => 'Name',
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->term) {
            $res['Term'] = $this->term;
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
     * @return PaasConditionEntryDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['Term'])) {
            $model->term = $map['Term'];
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
