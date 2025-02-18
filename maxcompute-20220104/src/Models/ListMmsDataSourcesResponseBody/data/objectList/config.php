<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListMmsDataSourcesResponseBody\data\objectList;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string[]
     */
    public $enums;
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $key;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $placeHolder;
    /**
     * @var bool
     */
    public $required;
    /**
     * @var string
     */
    public $subType;
    /**
     * @var string
     */
    public $type;
    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'desc'        => 'desc',
        'enums'       => 'enums',
        'group'       => 'group',
        'key'         => 'key',
        'name'        => 'name',
        'placeHolder' => 'placeHolder',
        'required'    => 'required',
        'subType'     => 'subType',
        'type'        => 'type',
        'value'       => 'value',
    ];

    public function validate()
    {
        if (\is_array($this->enums)) {
            Model::validateArray($this->enums);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->enums) {
            if (\is_array($this->enums)) {
                $res['enums'] = [];
                $n1           = 0;
                foreach ($this->enums as $item1) {
                    $res['enums'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->placeHolder) {
            $res['placeHolder'] = $this->placeHolder;
        }

        if (null !== $this->required) {
            $res['required'] = $this->required;
        }

        if (null !== $this->subType) {
            $res['subType'] = $this->subType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['enums'])) {
            if (!empty($map['enums'])) {
                $model->enums = [];
                $n1           = 0;
                foreach ($map['enums'] as $item1) {
                    $model->enums[$n1++] = $item1;
                }
            }
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['placeHolder'])) {
            $model->placeHolder = $map['placeHolder'];
        }

        if (isset($map['required'])) {
            $model->required = $map['required'];
        }

        if (isset($map['subType'])) {
            $model->subType = $map['subType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
