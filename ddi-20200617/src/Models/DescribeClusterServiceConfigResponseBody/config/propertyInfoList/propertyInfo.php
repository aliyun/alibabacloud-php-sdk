<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\effectWay;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyTypes;
use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyValueAttributes;
use AlibabaCloud\Tea\Model;

class propertyInfo extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $component;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var propertyTypes
     */
    public $propertyTypes;

    /**
     * @var propertyValueAttributes
     */
    public $propertyValueAttributes;

    /**
     * @var effectWay
     */
    public $effectWay;
    protected $_name = [
        'displayName'             => 'DisplayName',
        'value'                   => 'Value',
        'description'             => 'Description',
        'component'               => 'Component',
        'fileName'                => 'FileName',
        'name'                    => 'Name',
        'serviceName'             => 'ServiceName',
        'propertyTypes'           => 'PropertyTypes',
        'propertyValueAttributes' => 'PropertyValueAttributes',
        'effectWay'               => 'EffectWay',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->propertyTypes) {
            $res['PropertyTypes'] = null !== $this->propertyTypes ? $this->propertyTypes->toMap() : null;
        }
        if (null !== $this->propertyValueAttributes) {
            $res['PropertyValueAttributes'] = null !== $this->propertyValueAttributes ? $this->propertyValueAttributes->toMap() : null;
        }
        if (null !== $this->effectWay) {
            $res['EffectWay'] = null !== $this->effectWay ? $this->effectWay->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['PropertyTypes'])) {
            $model->propertyTypes = propertyTypes::fromMap($map['PropertyTypes']);
        }
        if (isset($map['PropertyValueAttributes'])) {
            $model->propertyValueAttributes = propertyValueAttributes::fromMap($map['PropertyValueAttributes']);
        }
        if (isset($map['EffectWay'])) {
            $model->effectWay = effectWay::fromMap($map['EffectWay']);
        }

        return $model;
    }
}
