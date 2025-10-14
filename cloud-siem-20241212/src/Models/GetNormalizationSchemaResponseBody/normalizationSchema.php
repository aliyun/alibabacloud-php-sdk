<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaResponseBody\normalizationSchema\normalizationFields;

class normalizationSchema extends Model
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
     * @var normalizationFields[]
     */
    public $normalizationFields;

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
        'normalizationFields' => 'NormalizationFields',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'normalizationSchemaName' => 'NormalizationSchemaName',
        'normalizationSchemaType' => 'NormalizationSchemaType',
        'targetLogStore' => 'TargetLogStore',
        'targetStoreView' => 'TargetStoreView',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->normalizationCategoryId) {
            $res['NormalizationCategoryId'] = $this->normalizationCategoryId;
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

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
        }

        if (null !== $this->normalizationSchemaName) {
            $res['NormalizationSchemaName'] = $this->normalizationSchemaName;
        }

        if (null !== $this->normalizationSchemaType) {
            $res['NormalizationSchemaType'] = $this->normalizationSchemaType;
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

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
        }

        if (isset($map['NormalizationSchemaName'])) {
            $model->normalizationSchemaName = $map['NormalizationSchemaName'];
        }

        if (isset($map['NormalizationSchemaType'])) {
            $model->normalizationSchemaType = $map['NormalizationSchemaType'];
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
