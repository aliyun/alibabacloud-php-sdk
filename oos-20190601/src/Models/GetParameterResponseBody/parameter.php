<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetParameterResponseBody;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @example \"{\"\"AllowedValues":["parameter"],"AllowedPattern":"parameter","MinLength":0,"MaxLength":20}\"
     *
     * @var string
     */
    public $constraints;

    /**
     * @example root(130900000)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @example 2020-09-01T08:01:43Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @example parameter
     *
     * @var string
     */
    public $description;

    /**
     * @example p-4c4b401cab6747xxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @example MyParameter
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $parameterVersion;

    /**
     * @example rg-acfmxsn4m*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The ID of the request.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The region ID of the resource.
     *
     * @example String
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the common parameter.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The information of the common parameter.
     *
     * @example 2020-09-01T08:01:43Z
     *
     * @var string
     */
    public $updatedDate;

    /**
     * @description Queries a common parameter and its value.
     *
     * @example parameter
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'constraints'      => 'Constraints',
        'createdBy'        => 'CreatedBy',
        'createdDate'      => 'CreatedDate',
        'description'      => 'Description',
        'id'               => 'Id',
        'name'             => 'Name',
        'parameterVersion' => 'ParameterVersion',
        'resourceGroupId'  => 'ResourceGroupId',
        'shareType'        => 'ShareType',
        'tags'             => 'Tags',
        'type'             => 'Type',
        'updatedBy'        => 'UpdatedBy',
        'updatedDate'      => 'UpdatedDate',
        'value'            => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constraints) {
            $res['Constraints'] = $this->constraints;
        }
        if (null !== $this->createdBy) {
            $res['CreatedBy'] = $this->createdBy;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameterVersion) {
            $res['ParameterVersion'] = $this->parameterVersion;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Constraints'])) {
            $model->constraints = $map['Constraints'];
        }
        if (isset($map['CreatedBy'])) {
            $model->createdBy = $map['CreatedBy'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParameterVersion'])) {
            $model->parameterVersion = $map['ParameterVersion'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
