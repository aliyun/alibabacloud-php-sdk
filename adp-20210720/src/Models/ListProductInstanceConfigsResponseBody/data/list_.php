<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ListProductInstanceConfigsResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
    public $componentUID;

    /**
     * @var string
     */
    public $componentVersionUID;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $envUID;

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
    public $parentComponentReleaseName;

    /**
     * @var string
     */
    public $parentComponentVersionUID;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'componentName'              => 'componentName',
        'componentReleaseName'       => 'componentReleaseName',
        'componentUID'               => 'componentUID',
        'componentVersionUID'        => 'componentVersionUID',
        'createdAt'                  => 'createdAt',
        'description'                => 'description',
        'envUID'                     => 'envUID',
        'name'                       => 'name',
        'parentComponentName'        => 'parentComponentName',
        'parentComponentReleaseName' => 'parentComponentReleaseName',
        'parentComponentVersionUID'  => 'parentComponentVersionUID',
        'productName'                => 'productName',
        'productVersion'             => 'productVersion',
        'productVersionUID'          => 'productVersionUID',
        'uid'                        => 'uid',
        'value'                      => 'value',
        'valueType'                  => 'valueType',
        'vendorType'                 => 'vendorType',
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
        if (null !== $this->componentUID) {
            $res['componentUID'] = $this->componentUID;
        }
        if (null !== $this->componentVersionUID) {
            $res['componentVersionUID'] = $this->componentVersionUID;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
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
        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }
        if (null !== $this->productVersion) {
            $res['productVersion'] = $this->productVersion;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
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
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['componentUID'])) {
            $model->componentUID = $map['componentUID'];
        }
        if (isset($map['componentVersionUID'])) {
            $model->componentVersionUID = $map['componentVersionUID'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
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
        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }
        if (isset($map['productVersion'])) {
            $model->productVersion = $map['productVersion'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
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
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
