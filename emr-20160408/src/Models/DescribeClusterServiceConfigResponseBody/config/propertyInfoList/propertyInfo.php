<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\effectWay;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyTypes;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\propertyInfoList\propertyInfo\propertyValueAttributes;
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
     * @var propertyTypes
     */
    public $propertyTypes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var effectWay
     */
    public $effectWay;

    /**
     * @var string
     */
    public $component;

    /**
     * @var propertyValueAttributes
     */
    public $propertyValueAttributes;

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
    protected $_name = [
        'displayName'             => 'DisplayName',
        'value'                   => 'Value',
        'propertyTypes'           => 'PropertyTypes',
        'description'             => 'Description',
        'effectWay'               => 'EffectWay',
        'component'               => 'Component',
        'propertyValueAttributes' => 'PropertyValueAttributes',
        'fileName'                => 'FileName',
        'name'                    => 'Name',
        'serviceName'             => 'ServiceName',
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
        if (null !== $this->propertyTypes) {
            $res['PropertyTypes'] = null !== $this->propertyTypes ? $this->propertyTypes->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectWay) {
            $res['EffectWay'] = null !== $this->effectWay ? $this->effectWay->toMap() : null;
        }
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->propertyValueAttributes) {
            $res['PropertyValueAttributes'] = null !== $this->propertyValueAttributes ? $this->propertyValueAttributes->toMap() : null;
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
        if (isset($map['PropertyTypes'])) {
            $model->propertyTypes = propertyTypes::fromMap($map['PropertyTypes']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectWay'])) {
            $model->effectWay = effectWay::fromMap($map['EffectWay']);
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['PropertyValueAttributes'])) {
            $model->propertyValueAttributes = propertyValueAttributes::fromMap($map['PropertyValueAttributes']);
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

        return $model;
    }
}
