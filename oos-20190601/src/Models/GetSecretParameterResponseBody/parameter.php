<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParameterResponseBody;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The constraints of the encryption parameter.
     *
     * @example \"{\"\"AllowedValues":["secretparameter"],"AllowedPattern":".*","MinLength":0,"MaxLength":20}\"
     *
     * @var string
     */
    public $constraints;

    /**
     * @description The user who created the encryption parameter.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $createdBy;

    /**
     * @description The time when the encryption parameter was created.
     *
     * @example 2020-09-01T09:28:47Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the encryption parameter.
     *
     * @example SecretParameter
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the encryption parameter.
     *
     * @example p-14ed150fdcd048xxxxxx
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the key of Key Management Service (KMS) that is used for encryption.
     *
     * @example 80e9409f-78fa-42ab-84bd-83f40c******
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The name of the encryption parameter.
     *
     * @example MySecretParameter
     *
     * @var string
     */
    public $name;

    /**
     * @description The version number of the encryption parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $parameterVersion;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The share type of the encryption parameter.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The tags of the parameter.
     *
     * @example {"k1": "v1", "k2": "v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The type of the parameter.
     *
     * @example Secret
     *
     * @var string
     */
    public $type;

    /**
     * @description The user who updated the encryption parameter.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the encryption parameter was updated.
     *
     * @example 2020-09-01T09:35:17Z
     *
     * @var string
     */
    public $updatedDate;

    /**
     * @description The value of the encryption parameter.
     *
     * @example SecretParameter
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
        'keyId'            => 'KeyId',
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
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
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
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
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
