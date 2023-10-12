<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigurationSpecificationShrinkRequest extends Model
{
    /**
     * @example 5.0
     *
     * @var string
     */
    public $architecture;

    /**
     * @example clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 3601
     *
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $relatedVariateShrink;

    /**
     * @example DSW
     *
     * @var string
     */
    public $role;

    /**
     * @example {{hostname}}
     *
     * @var string
     */
    public $specificationContent;

    /**
     * @example ConfigurationSpecificationName
     *
     * @var string
     */
    public $specificationName;

    /**
     * @example Alibaba
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'architecture'         => 'Architecture',
        'clientToken'          => 'ClientToken',
        'instanceId'           => 'InstanceId',
        'model'                => 'Model',
        'relatedVariateShrink' => 'RelatedVariate',
        'role'                 => 'Role',
        'specificationContent' => 'SpecificationContent',
        'specificationName'    => 'SpecificationName',
        'vendor'               => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->relatedVariateShrink) {
            $res['RelatedVariate'] = $this->relatedVariateShrink;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->specificationContent) {
            $res['SpecificationContent'] = $this->specificationContent;
        }
        if (null !== $this->specificationName) {
            $res['SpecificationName'] = $this->specificationName;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigurationSpecificationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['RelatedVariate'])) {
            $model->relatedVariateShrink = $map['RelatedVariate'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['SpecificationContent'])) {
            $model->specificationContent = $map['SpecificationContent'];
        }
        if (isset($map['SpecificationName'])) {
            $model->specificationName = $map['SpecificationName'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
