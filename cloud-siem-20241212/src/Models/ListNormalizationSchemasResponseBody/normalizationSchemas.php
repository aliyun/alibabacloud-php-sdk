<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationSchemasResponseBody;

use AlibabaCloud\Dara\Model;

class normalizationSchemas extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $normalizationCategoryId;

    /**
     * @var string
     */
    public $normalizationFieldSource;

    /**
     * @var string
     */
    public $normalizationSchemaDescription;

    /**
     * @var string
     */
    public $normalizationSchemaFrom;

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
    public $normalizationSchemaTargetLogStore;

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
     * @var string[]
     */
    public $recommendEntities;

    /**
     * @var string
     */
    public $targetLogStore;

    /**
     * @var string
     */
    public $targetStoreView;

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
        'normalizationCategoryId' => 'NormalizationCategoryId',
        'normalizationFieldSource' => 'NormalizationFieldSource',
        'normalizationSchemaDescription' => 'NormalizationSchemaDescription',
        'normalizationSchemaFrom' => 'NormalizationSchemaFrom',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'normalizationSchemaName' => 'NormalizationSchemaName',
        'normalizationSchemaTargetLogStore' => 'NormalizationSchemaTargetLogStore',
        'normalizationSchemaType' => 'NormalizationSchemaType',
        'normalizationSecurityDomainId' => 'NormalizationSecurityDomainId',
        'productId' => 'ProductId',
        'recommendEntities' => 'RecommendEntities',
        'targetLogStore' => 'TargetLogStore',
        'targetStoreView' => 'TargetStoreView',
        'updateTime' => 'UpdateTime',
        'vendorId' => 'VendorId',
    ];

    public function validate()
    {
        if (\is_array($this->recommendEntities)) {
            Model::validateArray($this->recommendEntities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->normalizationCategoryId) {
            $res['NormalizationCategoryId'] = $this->normalizationCategoryId;
        }

        if (null !== $this->normalizationFieldSource) {
            $res['NormalizationFieldSource'] = $this->normalizationFieldSource;
        }

        if (null !== $this->normalizationSchemaDescription) {
            $res['NormalizationSchemaDescription'] = $this->normalizationSchemaDescription;
        }

        if (null !== $this->normalizationSchemaFrom) {
            $res['NormalizationSchemaFrom'] = $this->normalizationSchemaFrom;
        }

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
        }

        if (null !== $this->normalizationSchemaName) {
            $res['NormalizationSchemaName'] = $this->normalizationSchemaName;
        }

        if (null !== $this->normalizationSchemaTargetLogStore) {
            $res['NormalizationSchemaTargetLogStore'] = $this->normalizationSchemaTargetLogStore;
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

        if (null !== $this->recommendEntities) {
            if (\is_array($this->recommendEntities)) {
                $res['RecommendEntities'] = [];
                $n1 = 0;
                foreach ($this->recommendEntities as $item1) {
                    $res['RecommendEntities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetLogStore) {
            $res['TargetLogStore'] = $this->targetLogStore;
        }

        if (null !== $this->targetStoreView) {
            $res['TargetStoreView'] = $this->targetStoreView;
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

        if (isset($map['NormalizationCategoryId'])) {
            $model->normalizationCategoryId = $map['NormalizationCategoryId'];
        }

        if (isset($map['NormalizationFieldSource'])) {
            $model->normalizationFieldSource = $map['NormalizationFieldSource'];
        }

        if (isset($map['NormalizationSchemaDescription'])) {
            $model->normalizationSchemaDescription = $map['NormalizationSchemaDescription'];
        }

        if (isset($map['NormalizationSchemaFrom'])) {
            $model->normalizationSchemaFrom = $map['NormalizationSchemaFrom'];
        }

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
        }

        if (isset($map['NormalizationSchemaName'])) {
            $model->normalizationSchemaName = $map['NormalizationSchemaName'];
        }

        if (isset($map['NormalizationSchemaTargetLogStore'])) {
            $model->normalizationSchemaTargetLogStore = $map['NormalizationSchemaTargetLogStore'];
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

        if (isset($map['RecommendEntities'])) {
            if (!empty($map['RecommendEntities'])) {
                $model->recommendEntities = [];
                $n1 = 0;
                foreach ($map['RecommendEntities'] as $item1) {
                    $model->recommendEntities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetLogStore'])) {
            $model->targetLogStore = $map['TargetLogStore'];
        }

        if (isset($map['TargetStoreView'])) {
            $model->targetStoreView = $map['TargetStoreView'];
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
