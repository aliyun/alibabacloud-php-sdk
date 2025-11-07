<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetSecretParameterResponseBody;

use AlibabaCloud\Dara\Model;

class parameter extends Model
{
    /**
     * @var string
     */
    public $constraints;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $DKMSInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parameterVersion;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $shareType;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var string
     */
    public $updatedDate;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'constraints' => 'Constraints',
        'createdBy' => 'CreatedBy',
        'createdDate' => 'CreatedDate',
        'DKMSInstanceId' => 'DKMSInstanceId',
        'description' => 'Description',
        'id' => 'Id',
        'keyId' => 'KeyId',
        'name' => 'Name',
        'parameterVersion' => 'ParameterVersion',
        'resourceGroupId' => 'ResourceGroupId',
        'shareType' => 'ShareType',
        'tags' => 'Tags',
        'type' => 'Type',
        'updatedBy' => 'UpdatedBy',
        'updatedDate' => 'UpdatedDate',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->DKMSInstanceId) {
            $res['DKMSInstanceId'] = $this->DKMSInstanceId;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['DKMSInstanceId'])) {
            $model->DKMSInstanceId = $map['DKMSInstanceId'];
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
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
