<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\CreateNormalizationSchemaRequest\normalizationFields;

class CreateNormalizationSchemaRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $normalizationCategoryId;

    /**
     * @var string
     */
    public $normalizationFieldSource;

    /**
     * @var normalizationFields[]
     */
    public $normalizationFields;

    /**
     * @var string
     */
    public $normalizationSchemaDescription;

    /**
     * @var string
     */
    public $normalizationSchemaId;

    /**
     * @var string
     */
    public $normalizationSchemaName;

    /**
     * @var string
     */
    public $normalizationSchemaType;

    /**
     * @var string
     */
    public $normalizationSecurityDomainId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;

    /**
     * @var string
     */
    public $targetLogStore;

    /**
     * @var string
     */
    public $vendorId;
    protected $_name = [
        'lang' => 'Lang',
        'normalizationCategoryId' => 'NormalizationCategoryId',
        'normalizationFieldSource' => 'NormalizationFieldSource',
        'normalizationFields' => 'NormalizationFields',
        'normalizationSchemaDescription' => 'NormalizationSchemaDescription',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'normalizationSchemaName' => 'NormalizationSchemaName',
        'normalizationSchemaType' => 'NormalizationSchemaType',
        'normalizationSecurityDomainId' => 'NormalizationSecurityDomainId',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'targetLogStore' => 'TargetLogStore',
        'vendorId' => 'VendorId',
    ];

    public function validate()
    {
        if (\is_array($this->normalizationFields)) {
            Model::validateArray($this->normalizationFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->normalizationCategoryId) {
            $res['NormalizationCategoryId'] = $this->normalizationCategoryId;
        }

        if (null !== $this->normalizationFieldSource) {
            $res['NormalizationFieldSource'] = $this->normalizationFieldSource;
        }

        if (null !== $this->normalizationFields) {
            if (\is_array($this->normalizationFields)) {
                $res['NormalizationFields'] = [];
                $n1 = 0;
                foreach ($this->normalizationFields as $item1) {
                    $res['NormalizationFields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalizationSchemaDescription) {
            $res['NormalizationSchemaDescription'] = $this->normalizationSchemaDescription;
        }

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
        }

        if (null !== $this->normalizationSchemaName) {
            $res['NormalizationSchemaName'] = $this->normalizationSchemaName;
        }

        if (null !== $this->normalizationSchemaType) {
            $res['NormalizationSchemaType'] = $this->normalizationSchemaType;
        }

        if (null !== $this->normalizationSecurityDomainId) {
            $res['NormalizationSecurityDomainId'] = $this->normalizationSecurityDomainId;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
        }

        if (null !== $this->targetLogStore) {
            $res['TargetLogStore'] = $this->targetLogStore;
        }

        if (null !== $this->vendorId) {
            $res['VendorId'] = $this->vendorId;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NormalizationCategoryId'])) {
            $model->normalizationCategoryId = $map['NormalizationCategoryId'];
        }

        if (isset($map['NormalizationFieldSource'])) {
            $model->normalizationFieldSource = $map['NormalizationFieldSource'];
        }

        if (isset($map['NormalizationFields'])) {
            if (!empty($map['NormalizationFields'])) {
                $model->normalizationFields = [];
                $n1 = 0;
                foreach ($map['NormalizationFields'] as $item1) {
                    $model->normalizationFields[$n1] = normalizationFields::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalizationSchemaDescription'])) {
            $model->normalizationSchemaDescription = $map['NormalizationSchemaDescription'];
        }

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
        }

        if (isset($map['NormalizationSchemaName'])) {
            $model->normalizationSchemaName = $map['NormalizationSchemaName'];
        }

        if (isset($map['NormalizationSchemaType'])) {
            $model->normalizationSchemaType = $map['NormalizationSchemaType'];
        }

        if (isset($map['NormalizationSecurityDomainId'])) {
            $model->normalizationSecurityDomainId = $map['NormalizationSecurityDomainId'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        if (isset($map['TargetLogStore'])) {
            $model->targetLogStore = $map['TargetLogStore'];
        }

        if (isset($map['VendorId'])) {
            $model->vendorId = $map['VendorId'];
        }

        return $model;
    }
}
