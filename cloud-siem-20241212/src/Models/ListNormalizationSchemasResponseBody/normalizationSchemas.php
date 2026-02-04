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
    public $targetLogStore;

    /**
     * @var string
     */
    public $targetStoreView;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'normalizationCategoryId' => 'NormalizationCategoryId',
        'normalizationSchemaDescription' => 'NormalizationSchemaDescription',
        'normalizationSchemaFrom' => 'NormalizationSchemaFrom',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'normalizationSchemaName' => 'NormalizationSchemaName',
        'normalizationSchemaTargetLogStore' => 'NormalizationSchemaTargetLogStore',
        'targetLogStore' => 'TargetLogStore',
        'targetStoreView' => 'TargetStoreView',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
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

        if (null !== $this->targetLogStore) {
            $res['TargetLogStore'] = $this->targetLogStore;
        }

        if (null !== $this->targetStoreView) {
            $res['TargetStoreView'] = $this->targetStoreView;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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

        if (isset($map['TargetLogStore'])) {
            $model->targetLogStore = $map['TargetLogStore'];
        }

        if (isset($map['TargetStoreView'])) {
            $model->targetStoreView = $map['TargetStoreView'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
