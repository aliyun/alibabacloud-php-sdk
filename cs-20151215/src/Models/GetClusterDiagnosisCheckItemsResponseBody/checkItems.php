<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetClusterDiagnosisCheckItemsResponseBody;

use AlibabaCloud\Dara\Model;

class checkItems extends Model
{
    /**
     * @var string
     */
    public $desc;
    /**
     * @var string
     */
    public $display;
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $level;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $refer;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'desc'    => 'desc',
        'display' => 'display',
        'group'   => 'group',
        'level'   => 'level',
        'message' => 'message',
        'name'    => 'name',
        'refer'   => 'refer',
        'value'   => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->display) {
            $res['display'] = $this->display;
        }

        if (null !== $this->group) {
            $res['group'] = $this->group;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->refer) {
            $res['refer'] = $this->refer;
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

        if (isset($map['display'])) {
            $model->display = $map['display'];
        }

        if (isset($map['group'])) {
            $model->group = $map['group'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['refer'])) {
            $model->refer = $map['refer'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
