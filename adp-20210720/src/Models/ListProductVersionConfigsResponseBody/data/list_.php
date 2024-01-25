<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductVersionConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example component
     *
     * @var string
     */
    public $componentName;

    /**
     * @example component
     *
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
     * @example parent-component
     *
     * @var string
     */
    public $parentComponentName;

    /**
     * @example parent-component
     *
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
     * @example e61f944c-c021-46bd-a877-xxxxxxxxxxxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string
     */
    public $scope;

    /**
     * @example fd460c2f-1d81-428d-81f7-xxxxxxxxxxxx
     *
     * @var string
     */
    public $uid;

    /**
     * @example value
     *
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'componentName'              => 'componentName',
        'componentReleaseName'       => 'componentReleaseName',
        'componentVersionUID'        => 'componentVersionUID',
        'description'                => 'description',
        'name'                       => 'name',
        'parentComponentName'        => 'parentComponentName',
        'parentComponentReleaseName' => 'parentComponentReleaseName',
        'parentComponentVersionUID'  => 'parentComponentVersionUID',
        'productVersionUID'          => 'productVersionUID',
        'scope'                      => 'scope',
        'uid'                        => 'uid',
        'value'                      => 'value',
        'valueType'                  => 'valueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }
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
        if (null !== $this->parentComponentName) {
            $res['parentComponentName'] = $this->parentComponentName;
        }
        if (null !== $this->parentComponentReleaseName) {
            $res['parentComponentReleaseName'] = $this->parentComponentReleaseName;
        }
        if (null !== $this->parentComponentVersionUID) {
            $res['parentComponentVersionUID'] = $this->parentComponentVersionUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }
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
        if (isset($map['parentComponentName'])) {
            $model->parentComponentName = $map['parentComponentName'];
        }
        if (isset($map['parentComponentReleaseName'])) {
            $model->parentComponentReleaseName = $map['parentComponentReleaseName'];
        }
        if (isset($map['parentComponentVersionUID'])) {
            $model->parentComponentVersionUID = $map['parentComponentVersionUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
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
