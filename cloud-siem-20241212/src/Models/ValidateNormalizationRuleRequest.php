<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ValidateNormalizationRuleRequest extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $extendFieldStoreMode;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $logSample;

    /**
     * @var string
     */
    public $normalizationCategoryId;

    /**
     * @var string
     */
    public $normalizationRuleExpression;

    /**
     * @var string
     */
    public $normalizationRuleMode;

    /**
     * @var string
     */
    public $normalizationSchemaId;

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
    public $vendorId;
    protected $_name = [
        'data' => 'Data',
        'extendFieldStoreMode' => 'ExtendFieldStoreMode',
        'lang' => 'Lang',
        'logSample' => 'LogSample',
        'normalizationCategoryId' => 'NormalizationCategoryId',
        'normalizationRuleExpression' => 'NormalizationRuleExpression',
        'normalizationRuleMode' => 'NormalizationRuleMode',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'vendorId' => 'VendorId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->extendFieldStoreMode) {
            $res['ExtendFieldStoreMode'] = $this->extendFieldStoreMode;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logSample) {
            $res['LogSample'] = $this->logSample;
        }

        if (null !== $this->normalizationCategoryId) {
            $res['NormalizationCategoryId'] = $this->normalizationCategoryId;
        }

        if (null !== $this->normalizationRuleExpression) {
            $res['NormalizationRuleExpression'] = $this->normalizationRuleExpression;
        }

        if (null !== $this->normalizationRuleMode) {
            $res['NormalizationRuleMode'] = $this->normalizationRuleMode;
        }

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['ExtendFieldStoreMode'])) {
            $model->extendFieldStoreMode = $map['ExtendFieldStoreMode'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogSample'])) {
            $model->logSample = $map['LogSample'];
        }

        if (isset($map['NormalizationCategoryId'])) {
            $model->normalizationCategoryId = $map['NormalizationCategoryId'];
        }

        if (isset($map['NormalizationRuleExpression'])) {
            $model->normalizationRuleExpression = $map['NormalizationRuleExpression'];
        }

        if (isset($map['NormalizationRuleMode'])) {
            $model->normalizationRuleMode = $map['NormalizationRuleMode'];
        }

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
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

        if (isset($map['VendorId'])) {
            $model->vendorId = $map['VendorId'];
        }

        return $model;
    }
}
