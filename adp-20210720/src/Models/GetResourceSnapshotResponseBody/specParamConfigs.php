<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetResourceSnapshotResponseBody;

use AlibabaCloud\Tea\Model;

class specParamConfigs extends Model
{
    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $componentReleaseName;

    /**
     * @var string
     */
    public $componentSource;

    /**
     * @var string
     */
    public $componentVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $parentComponentName;

    /**
     * @var string
     */
    public $parentComponentReleaseName;

    /**
     * @var string
     */
    public $parentComponentVersion;

    /**
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
        'componentSource'            => 'componentSource',
        'componentVersion'           => 'componentVersion',
        'name'                       => 'name',
        'paramType'                  => 'paramType',
        'parentComponentName'        => 'parentComponentName',
        'parentComponentReleaseName' => 'parentComponentReleaseName',
        'parentComponentVersion'     => 'parentComponentVersion',
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
        if (null !== $this->componentSource) {
            $res['componentSource'] = $this->componentSource;
        }
        if (null !== $this->componentVersion) {
            $res['componentVersion'] = $this->componentVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->paramType) {
            $res['paramType'] = $this->paramType;
        }
        if (null !== $this->parentComponentName) {
            $res['parentComponentName'] = $this->parentComponentName;
        }
        if (null !== $this->parentComponentReleaseName) {
            $res['parentComponentReleaseName'] = $this->parentComponentReleaseName;
        }
        if (null !== $this->parentComponentVersion) {
            $res['parentComponentVersion'] = $this->parentComponentVersion;
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
     * @return specParamConfigs
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
        if (isset($map['componentSource'])) {
            $model->componentSource = $map['componentSource'];
        }
        if (isset($map['componentVersion'])) {
            $model->componentVersion = $map['componentVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['paramType'])) {
            $model->paramType = $map['paramType'];
        }
        if (isset($map['parentComponentName'])) {
            $model->parentComponentName = $map['parentComponentName'];
        }
        if (isset($map['parentComponentReleaseName'])) {
            $model->parentComponentReleaseName = $map['parentComponentReleaseName'];
        }
        if (isset($map['parentComponentVersion'])) {
            $model->parentComponentVersion = $map['parentComponentVersion'];
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
