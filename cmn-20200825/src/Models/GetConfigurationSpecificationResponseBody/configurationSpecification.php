<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetConfigurationSpecificationResponseBody;

use AlibabaCloud\Tea\Model;

class configurationSpecification extends Model
{
    /**
     * @example 5.0
     *
     * @var string
     */
    public $architecture;

    /**
     * @example configurationSpecificationId
     *
     * @var string
     */
    public $configurationSpecificationId;

    /**
     * @description 代表创建时间的资源属性字段
     *
     * @example 2020-02-01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 5750
     *
     * @var string
     */
    public $mode;

    /**
     * @var string[]
     */
    public $relatedVariate;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example config
     *
     * @var string
     */
    public $specificationContent;

    /**
     * @example config
     *
     * @var string
     */
    public $specificationName;

    /**
     * @example 2020-02-01
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example HUAWEI
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'architecture'                 => 'Architecture',
        'configurationSpecificationId' => 'ConfigurationSpecificationId',
        'createTime'                   => 'CreateTime',
        'mode'                         => 'Mode',
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
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
     * @return configurationSpecification
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
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
