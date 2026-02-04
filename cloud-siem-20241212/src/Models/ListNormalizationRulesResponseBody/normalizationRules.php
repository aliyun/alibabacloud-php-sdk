<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationRulesResponseBody\normalizationRules\normalizationRuleReferences;

class normalizationRules extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $extendContentPacked;

    /**
     * @var string
     */
    public $extendFieldStoreMode;

    /**
     * @var string
     */
    public $normalizationCategoryId;

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
     * @var string
     */
    public $normalizationRuleMode;

    /**
     * @var string
     */
    public $normalizationRuleName;

    /**
     * @var normalizationRuleReferences[]
     */
    public $normalizationRuleReferences;

    /**
     * @var string
     */
    public $normalizationRuleStatus;

    /**
     * @var string
     */
    public $normalizationRuleType;

    /**
     * @var string
     */
    public $normalizationRuleVersion;

    /**
     * @var string
     */
    public $normalizationSchemaId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vendorId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'extendContentPacked' => 'ExtendContentPacked',
        'extendFieldStoreMode' => 'ExtendFieldStoreMode',
        'normalizationCategoryId' => 'NormalizationCategoryId',
        'normalizationRuleDescription' => 'NormalizationRuleDescription',
        'normalizationRuleExpression' => 'NormalizationRuleExpression',
        'normalizationRuleFormat' => 'NormalizationRuleFormat',
        'normalizationRuleId' => 'NormalizationRuleId',
        'normalizationRuleMode' => 'NormalizationRuleMode',
        'normalizationRuleName' => 'NormalizationRuleName',
        'normalizationRuleReferences' => 'NormalizationRuleReferences',
        'normalizationRuleStatus' => 'NormalizationRuleStatus',
        'normalizationRuleType' => 'NormalizationRuleType',
        'normalizationRuleVersion' => 'NormalizationRuleVersion',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'productId' => 'ProductId',
        'updateTime' => 'UpdateTime',
        'vendorId' => 'VendorId',
    ];

    public function validate()
    {
        if (\is_array($this->normalizationRuleReferences)) {
            Model::validateArray($this->normalizationRuleReferences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->extendContentPacked) {
            $res['ExtendContentPacked'] = $this->extendContentPacked;
        }

        if (null !== $this->extendFieldStoreMode) {
            $res['ExtendFieldStoreMode'] = $this->extendFieldStoreMode;
        }

        if (null !== $this->normalizationCategoryId) {
            $res['NormalizationCategoryId'] = $this->normalizationCategoryId;
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

        if (null !== $this->normalizationRuleMode) {
            $res['NormalizationRuleMode'] = $this->normalizationRuleMode;
        }

        if (null !== $this->normalizationRuleName) {
            $res['NormalizationRuleName'] = $this->normalizationRuleName;
        }

        if (null !== $this->normalizationRuleReferences) {
            if (\is_array($this->normalizationRuleReferences)) {
                $res['NormalizationRuleReferences'] = [];
                $n1 = 0;
                foreach ($this->normalizationRuleReferences as $item1) {
                    $res['NormalizationRuleReferences'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalizationRuleStatus) {
            $res['NormalizationRuleStatus'] = $this->normalizationRuleStatus;
        }

        if (null !== $this->normalizationRuleType) {
            $res['NormalizationRuleType'] = $this->normalizationRuleType;
        }

        if (null !== $this->normalizationRuleVersion) {
            $res['NormalizationRuleVersion'] = $this->normalizationRuleVersion;
        }

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExtendContentPacked'])) {
            $model->extendContentPacked = $map['ExtendContentPacked'];
        }

        if (isset($map['ExtendFieldStoreMode'])) {
            $model->extendFieldStoreMode = $map['ExtendFieldStoreMode'];
        }

        if (isset($map['NormalizationCategoryId'])) {
            $model->normalizationCategoryId = $map['NormalizationCategoryId'];
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

        if (isset($map['NormalizationRuleMode'])) {
            $model->normalizationRuleMode = $map['NormalizationRuleMode'];
        }

        if (isset($map['NormalizationRuleName'])) {
            $model->normalizationRuleName = $map['NormalizationRuleName'];
        }

        if (isset($map['NormalizationRuleReferences'])) {
            if (!empty($map['NormalizationRuleReferences'])) {
                $model->normalizationRuleReferences = [];
                $n1 = 0;
                foreach ($map['NormalizationRuleReferences'] as $item1) {
                    $model->normalizationRuleReferences[$n1] = normalizationRuleReferences::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalizationRuleStatus'])) {
            $model->normalizationRuleStatus = $map['NormalizationRuleStatus'];
        }

        if (isset($map['NormalizationRuleType'])) {
            $model->normalizationRuleType = $map['NormalizationRuleType'];
        }

        if (isset($map['NormalizationRuleVersion'])) {
            $model->normalizationRuleVersion = $map['NormalizationRuleVersion'];
        }

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VendorId'])) {
            $model->vendorId = $map['VendorId'];
        }

        return $model;
    }
}
