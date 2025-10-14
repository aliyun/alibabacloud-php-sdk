<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class UpdateNormalizationRuleRequest extends Model
{
    /**
     * @var string
     */
    public $extendContentPacked;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $normalizationRuleDescription;

    /**
     * @var string
     */
    public $normalizationRuleExpression;

    /**
     * @var string
     */
    public $normalizationRuleFormat;

    /**
     * @var string
     */
    public $normalizationRuleId;

    /**
     * @var string[]
     */
    public $normalizationRuleIds;

    /**
     * @var string
     */
    public $normalizationRuleMode;

    /**
     * @var string
     */
    public $normalizationRuleName;

    /**
     * @var string
     */
    public $normalizationRuleType;

    /**
     * @var string
     */
    public $normalizationSchemaId;

    /**
     * @var string
     */
    public $orderField;

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
        'extendContentPacked' => 'ExtendContentPacked',
        'lang' => 'Lang',
        'normalizationRuleDescription' => 'NormalizationRuleDescription',
        'normalizationRuleExpression' => 'NormalizationRuleExpression',
        'normalizationRuleFormat' => 'NormalizationRuleFormat',
        'normalizationRuleId' => 'NormalizationRuleId',
        'normalizationRuleIds' => 'NormalizationRuleIds',
        'normalizationRuleMode' => 'NormalizationRuleMode',
        'normalizationRuleName' => 'NormalizationRuleName',
        'normalizationRuleType' => 'NormalizationRuleType',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'orderField' => 'OrderField',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
        'vendorId' => 'VendorId',
    ];

    public function validate()
    {
        if (\is_array($this->normalizationRuleIds)) {
            Model::validateArray($this->normalizationRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendContentPacked) {
            $res['ExtendContentPacked'] = $this->extendContentPacked;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->normalizationRuleDescription) {
            $res['NormalizationRuleDescription'] = $this->normalizationRuleDescription;
        }

        if (null !== $this->normalizationRuleExpression) {
            $res['NormalizationRuleExpression'] = $this->normalizationRuleExpression;
        }

        if (null !== $this->normalizationRuleFormat) {
            $res['NormalizationRuleFormat'] = $this->normalizationRuleFormat;
        }

        if (null !== $this->normalizationRuleId) {
            $res['NormalizationRuleId'] = $this->normalizationRuleId;
        }

        if (null !== $this->normalizationRuleIds) {
            if (\is_array($this->normalizationRuleIds)) {
                $res['NormalizationRuleIds'] = [];
                $n1 = 0;
                foreach ($this->normalizationRuleIds as $item1) {
                    $res['NormalizationRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalizationRuleMode) {
            $res['NormalizationRuleMode'] = $this->normalizationRuleMode;
        }

        if (null !== $this->normalizationRuleName) {
            $res['NormalizationRuleName'] = $this->normalizationRuleName;
        }

        if (null !== $this->normalizationRuleType) {
            $res['NormalizationRuleType'] = $this->normalizationRuleType;
        }

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
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
        if (isset($map['ExtendContentPacked'])) {
            $model->extendContentPacked = $map['ExtendContentPacked'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['NormalizationRuleDescription'])) {
            $model->normalizationRuleDescription = $map['NormalizationRuleDescription'];
        }

        if (isset($map['NormalizationRuleExpression'])) {
            $model->normalizationRuleExpression = $map['NormalizationRuleExpression'];
        }

        if (isset($map['NormalizationRuleFormat'])) {
            $model->normalizationRuleFormat = $map['NormalizationRuleFormat'];
        }

        if (isset($map['NormalizationRuleId'])) {
            $model->normalizationRuleId = $map['NormalizationRuleId'];
        }

        if (isset($map['NormalizationRuleIds'])) {
            if (!empty($map['NormalizationRuleIds'])) {
                $model->normalizationRuleIds = [];
                $n1 = 0;
                foreach ($map['NormalizationRuleIds'] as $item1) {
                    $model->normalizationRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalizationRuleMode'])) {
            $model->normalizationRuleMode = $map['NormalizationRuleMode'];
        }

        if (isset($map['NormalizationRuleName'])) {
            $model->normalizationRuleName = $map['NormalizationRuleName'];
        }

        if (isset($map['NormalizationRuleType'])) {
            $model->normalizationRuleType = $map['NormalizationRuleType'];
        }

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
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
