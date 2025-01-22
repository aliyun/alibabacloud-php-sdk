<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;

class CreatePublicParameterRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $constraints;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $parameterType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'constraints'   => 'Constraints',
        'description'   => 'Description',
        'name'          => 'Name',
        'parameterType' => 'ParameterType',
        'regionId'      => 'RegionId',
        'value'         => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->constraints) {
            $res['Constraints'] = $this->constraints;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Constraints'])) {
            $model->constraints = $map['Constraints'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
