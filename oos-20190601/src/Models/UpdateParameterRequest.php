<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateParameterRequest extends Model
{
    /**
     * @description The ID of the common parameter.
     *
     * @example update
     *
     * @var string
     */
    public $description;

    /**
     * @description The data type of the common parameter.
     *
     * @example MyParameter
     *
     * @var string
     */
    public $name;

    /**
     * @description The version number of the common parameter.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The operation that you want to perform. Set the value to UpdateParameter.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The name of the common parameter.
     *
     * @example {"k1": "v1", "k2": "v2"}
     *
     * @var string
     */
    public $tags;

    /**
     * @description The value of the common parameter. The value must be 1 to 4096 characters in length.
     *
     * @example update
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description'     => 'Description',
        'name'            => 'Name',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateParameterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
