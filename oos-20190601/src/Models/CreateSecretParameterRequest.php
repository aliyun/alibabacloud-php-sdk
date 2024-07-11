<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretParameterRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can be up to 64 characters in length, and can contain letters, digits, hyphens (-), and underscores (_). For more information, see "How to ensure idempotence".
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The constraints of the encryption parameter. By default, this parameter is null. Valid values:
     *
     *   AllowedValues: The value that is allowed for the encryption parameter. It must be an array string.
     *   AllowedPattern: The pattern that is allowed for the encryption parameter. It must be a regular expression.
     *   MinLength: The minimum length of the encryption parameter.
     *   MaxLength: The maximum length of the encryption parameter.
     *
     * @example \\"{\\"\\"AllowedValues":["secretparameter"],"AllowedPattern":"secretparameter","MinLength":0,"MaxLength":20}\\"
     *
     * @var string
     */
    public $constraints;

    /**
     * @description The instance ID of the KMS instance.
     *
     * @example kst-hzz****
     *
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @description The description of the encryption parameter. The description must be 1 to 200 characters in length.
     *
     * @example SecretParameter
     *
     * @var string
     */
    public $description;

    /**
     * @description The key ID of Key Management Service (KMS) that is used to encrypt the parameter.
     *
     * @example 80e9409f-78fa-42ab-84bd-83f40c******
     *
     * @var string
     */
    public $keyId;

    /**
     * @description The name of the parameter. The name must be 1 to 180 characters in length, and can contain letters, digits, hyphens (-), and underscores (_). It cannot start with ALIYUN, ACS, ALIBABA, ALICLOUD, or OOS.
     *
     * This parameter is required.
     * @example MySecretParameter
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @example {"k1": "v1", "k2": "v2"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The type of the parameter. Set the value to Secret.
     *
     * @example Secret
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the encryption parameter. The value must be 1 to 4096 characters in length.
     *
     * This parameter is required.
     * @example SecretParameter
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'constraints'     => 'Constraints',
        'DKMSInstanceId'  => 'DKMSInstanceId',
        'description'     => 'Description',
        'keyId'           => 'KeyId',
        'name'            => 'Name',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags'            => 'Tags',
        'type'            => 'Type',
        'value'           => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->constraints) {
            $res['Constraints'] = $this->constraints;
        }
        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecretParameterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Constraints'])) {
            $model->constraints = $map['Constraints'];
        }
        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
