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
     * @example ""
     *
     * @var string
     */
    public $component;

    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @example tez-site
     *
     * @var string
     */
    public $displayName;

    /**
     * @var effectWay
     */
    public $effectWay;

    /**
     * @example tez-site
     *
     * @var string
     */
    public $fileName;

    /**
     * @example tez.lib.uris
     *
     * @var string
     */
    public $name;

    /**
     * @var propertyTypes
     */
    public $propertyTypes;

    /**
     * @var propertyValueAttributes
     */
    public $propertyValueAttributes;

    /**
     * @example TEZ
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example ${fs.defaultFS}/apps/tez-0.9.1-1.0.2/,${fs.defaultFS}/apps/tez-0.9.1-1.0.2/lib/
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'component'               => 'Component',
        'description'             => 'Description',
        'displayName'             => 'DisplayName',
        'effectWay'               => 'EffectWay',
        'fileName'                => 'FileName',
        'name'                    => 'Name',
        'propertyTypes'           => 'PropertyTypes',
        'propertyValueAttributes' => 'PropertyValueAttributes',
        'serviceName'             => 'ServiceName',
        'value'                   => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->effectWay) {
            $res['EffectWay'] = null !== $this->effectWay ? $this->effectWay->toMap() : null;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->propertyTypes) {
            $res['PropertyTypes'] = null !== $this->propertyTypes ? $this->propertyTypes->toMap() : null;
        }
        if (null !== $this->propertyValueAttributes) {
            $res['PropertyValueAttributes'] = null !== $this->propertyValueAttributes ? $this->propertyValueAttributes->toMap() : null;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EffectWay'])) {
            $model->effectWay = effectWay::fromMap($map['EffectWay']);
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PropertyTypes'])) {
            $model->propertyTypes = propertyTypes::fromMap($map['PropertyTypes']);
        }
        if (isset($map['PropertyValueAttributes'])) {
            $model->propertyValueAttributes = propertyValueAttributes::fromMap($map['PropertyValueAttributes']);
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
