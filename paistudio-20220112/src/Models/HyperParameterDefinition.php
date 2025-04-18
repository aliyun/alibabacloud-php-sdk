<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class HyperParameterDefinition extends Model
{
    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var HyperParameterRange
     */
    public $range;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'range' => 'Range',
        'required' => 'Required',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->range) {
            $this->range->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->range) {
            $res['Range'] = null !== $this->range ? $this->range->toArray($noStream) : $this->range;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Range'])) {
            $model->range = HyperParameterRange::fromMap($map['Range']);
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
