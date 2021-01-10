<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeConnectorCapabilityResponseBody\parameters\subParameters;
use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $placeHolder;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $example;

    /**
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string[]
     */
    public $enumDisplayName;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string[]
     */
    public $enum;

    /**
     * @var subParameters[]
     */
    public $subParameters;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'displayName'     => 'DisplayName',
        'type'            => 'Type',
        'placeHolder'     => 'PlaceHolder',
        'readOnly'        => 'ReadOnly',
        'example'         => 'Example',
        'defaultValue'    => 'DefaultValue',
        'subType'         => 'SubType',
        'enumDisplayName' => 'EnumDisplayName',
        'required'        => 'Required',
        'description'     => 'Description',
        'position'        => 'Position',
        'enum'            => 'Enum',
        'subParameters'   => 'SubParameters',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->placeHolder) {
            $res['PlaceHolder'] = $this->placeHolder;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }
        if (null !== $this->example) {
            $res['Example'] = $this->example;
        }
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->enumDisplayName) {
            $res['EnumDisplayName'] = $this->enumDisplayName;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->enum) {
            $res['Enum'] = $this->enum;
        }
        if (null !== $this->subParameters) {
            $res['SubParameters'] = [];
            if (null !== $this->subParameters && \is_array($this->subParameters)) {
                $n = 0;
                foreach ($this->subParameters as $item) {
                    $res['SubParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PlaceHolder'])) {
            $model->placeHolder = $map['PlaceHolder'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }
        if (isset($map['Example'])) {
            $model->example = $map['Example'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['EnumDisplayName'])) {
            if (!empty($map['EnumDisplayName'])) {
                $model->enumDisplayName = $map['EnumDisplayName'];
            }
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['Enum'])) {
            if (!empty($map['Enum'])) {
                $model->enum = $map['Enum'];
            }
        }
        if (isset($map['SubParameters'])) {
            if (!empty($map['SubParameters'])) {
                $model->subParameters = [];
                $n                    = 0;
                foreach ($map['SubParameters'] as $item) {
                    $model->subParameters[$n++] = null !== $item ? subParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
