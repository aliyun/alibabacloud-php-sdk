<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class AddProductVersionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $componentReleaseName;

    /**
     * @example 9963a9ec-95d0-4e82-88c8-xxxxxxxxxxxx
     *
     * @var string
     */
    public $componentVersionUID;

    /**
     * @example config
     *
     * @var string
     */
    public $description;

    /**
     * @example key
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentComponentReleaseName;

    /**
     * @example d415e042-c4be-4707-9bda-xxxxxxxxxxxx
     *
     * @var string
     */
    public $parentComponentVersionUID;

    /**
     * @var string
     */
    public $scope;

    /**
     * @example value
     *
     * @var string
     */
    public $value;

    /**
     * @example string
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'componentReleaseName'       => 'componentReleaseName',
        'componentVersionUID'        => 'componentVersionUID',
        'description'                => 'description',
        'name'                       => 'name',
        'parentComponentReleaseName' => 'parentComponentReleaseName',
        'parentComponentVersionUID'  => 'parentComponentVersionUID',
        'scope'                      => 'scope',
        'value'                      => 'value',
        'valueType'                  => 'valueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentReleaseName) {
            $res['componentReleaseName'] = $this->componentReleaseName;
        }
        if (null !== $this->componentVersionUID) {
            $res['componentVersionUID'] = $this->componentVersionUID;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentComponentReleaseName) {
            $res['parentComponentReleaseName'] = $this->parentComponentReleaseName;
        }
        if (null !== $this->parentComponentVersionUID) {
            $res['parentComponentVersionUID'] = $this->parentComponentVersionUID;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddProductVersionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentReleaseName'])) {
            $model->componentReleaseName = $map['componentReleaseName'];
        }
        if (isset($map['componentVersionUID'])) {
            $model->componentVersionUID = $map['componentVersionUID'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parentComponentReleaseName'])) {
            $model->parentComponentReleaseName = $map['parentComponentReleaseName'];
        }
        if (isset($map['parentComponentVersionUID'])) {
            $model->parentComponentVersionUID = $map['parentComponentVersionUID'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        return $model;
    }
}
