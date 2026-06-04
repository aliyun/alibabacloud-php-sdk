<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class MetaEntityAttributeDef extends Model
{
    /**
     * @var string[]
     */
    public $allowedValues;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $displayEnabled;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var bool
     */
    public $isOptional;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $searchFilterEnabled;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allowedValues' => 'AllowedValues',
        'description' => 'Description',
        'displayEnabled' => 'DisplayEnabled',
        'displayName' => 'DisplayName',
        'isOptional' => 'IsOptional',
        'name' => 'Name',
        'searchFilterEnabled' => 'SearchFilterEnabled',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->allowedValues)) {
            Model::validateArray($this->allowedValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedValues) {
            if (\is_array($this->allowedValues)) {
                $res['AllowedValues'] = [];
                $n1 = 0;
                foreach ($this->allowedValues as $item1) {
                    $res['AllowedValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayEnabled) {
            $res['DisplayEnabled'] = $this->displayEnabled;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->isOptional) {
            $res['IsOptional'] = $this->isOptional;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->searchFilterEnabled) {
            $res['SearchFilterEnabled'] = $this->searchFilterEnabled;
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
        if (isset($map['AllowedValues'])) {
            if (!empty($map['AllowedValues'])) {
                $model->allowedValues = [];
                $n1 = 0;
                foreach ($map['AllowedValues'] as $item1) {
                    $model->allowedValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayEnabled'])) {
            $model->displayEnabled = $map['DisplayEnabled'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['IsOptional'])) {
            $model->isOptional = $map['IsOptional'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SearchFilterEnabled'])) {
            $model->searchFilterEnabled = $map['SearchFilterEnabled'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
