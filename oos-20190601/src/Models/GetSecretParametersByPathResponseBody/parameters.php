<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParametersByPathResponseBody;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @description The constraints of the encryption parameter.
     *
     * @example {\\"AllowedPattern\\": \\"^[a-g]*$\\"}
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
     * @description The time when the encryption parameter was updated.
     *
     * @example 2020-10-21T06:22:48Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the encryption parameter.
     *
     * @example secretParameter
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the encryption parameter.
     *
     * @example p-7cdc0000000000000000
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the key.
     *
     * @example 090xxbex-xexx-xxxx-axfc-ddxxcxxxxcex
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The name of the encryption parameter.
     *
     * @example mySecretParameter
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
     * @description The share type of the encryption parameter.
     *
     * @example Private
     *
     * @var string
     */
    public $shareType;

    /**
     * @description The data type of the encryption parameter.
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
     * @example 2020-10-21T06:22:48Z
     *
     * @var string
     */
    public $updatedDate;

    /**
     * @description The value of the encryption parameter.
     *
     * @example secretParameter
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
        'shareType'        => 'ShareType',
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
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
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
     * @return parameters
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
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
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
