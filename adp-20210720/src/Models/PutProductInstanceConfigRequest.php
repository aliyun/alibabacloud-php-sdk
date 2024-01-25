<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class PutProductInstanceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $componentUID;

    /**
     * @var string
     */
    public $componentVersionUID;

    /**
     * @var string
     */
    public $configUID;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $environmentUID;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentComponentName;

    /**
     * @var string
     */
    public $parentComponentVersionUID;

    /**
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string
     */
    public $releaseName;

    /**
     * @var string[]
     */
    public $scope;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;
    protected $_name = [
        'componentUID'              => 'componentUID',
        'componentVersionUID'       => 'componentVersionUID',
        'configUID'                 => 'configUID',
        'description'               => 'description',
        'environmentUID'            => 'environmentUID',
        'name'                      => 'name',
        'parentComponentName'       => 'parentComponentName',
        'parentComponentVersionUID' => 'parentComponentVersionUID',
        'productVersionUID'         => 'productVersionUID',
        'releaseName'               => 'releaseName',
        'scope'                     => 'scope',
        'value'                     => 'value',
        'valueType'                 => 'valueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentUID) {
            $res['componentUID'] = $this->componentUID;
        }
        if (null !== $this->componentVersionUID) {
            $res['componentVersionUID'] = $this->componentVersionUID;
        }
        if (null !== $this->configUID) {
            $res['configUID'] = $this->configUID;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->environmentUID) {
            $res['environmentUID'] = $this->environmentUID;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->parentComponentName) {
            $res['parentComponentName'] = $this->parentComponentName;
        }
        if (null !== $this->parentComponentVersionUID) {
            $res['parentComponentVersionUID'] = $this->parentComponentVersionUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
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
     * @return PutProductInstanceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentUID'])) {
            $model->componentUID = $map['componentUID'];
        }
        if (isset($map['componentVersionUID'])) {
            $model->componentVersionUID = $map['componentVersionUID'];
        }
        if (isset($map['configUID'])) {
            $model->configUID = $map['configUID'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['environmentUID'])) {
            $model->environmentUID = $map['environmentUID'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['parentComponentName'])) {
            $model->parentComponentName = $map['parentComponentName'];
        }
        if (isset($map['parentComponentVersionUID'])) {
            $model->parentComponentVersionUID = $map['parentComponentVersionUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }
        if (isset($map['scope'])) {
            if (!empty($map['scope'])) {
                $model->scope = $map['scope'];
            }
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
