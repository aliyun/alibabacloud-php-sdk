<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ConfigurationSpecification extends Model
{
    /**
     * @example 5.0
     *
     * @var string
     */
    public $architecture;

    /**
     * @example xxxyyy
     *
     * @var string
     */
    public $configurationSpecificationId;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 3601
     *
     * @var string
     */
    public $model;

    /**
     * @var string[]
     */
    public $relatedVariate;

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
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example Alibaba
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'architecture'                 => 'Architecture',
        'configurationSpecificationId' => 'ConfigurationSpecificationId',
        'createTime'                   => 'CreateTime',
        'model'                        => 'Model',
        'relatedVariate'               => 'RelatedVariate',
        'role'                         => 'Role',
        'specificationContent'         => 'SpecificationContent',
        'specificationName'            => 'SpecificationName',
        'updateTime'                   => 'UpdateTime',
        'vendor'                       => 'Vendor',
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
        if (null !== $this->configurationSpecificationId) {
            $res['ConfigurationSpecificationId'] = $this->configurationSpecificationId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->relatedVariate) {
            $res['RelatedVariate'] = $this->relatedVariate;
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
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigurationSpecification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['ConfigurationSpecificationId'])) {
            $model->configurationSpecificationId = $map['ConfigurationSpecificationId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['RelatedVariate'])) {
            if (!empty($map['RelatedVariate'])) {
                $model->relatedVariate = $map['RelatedVariate'];
            }
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
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
