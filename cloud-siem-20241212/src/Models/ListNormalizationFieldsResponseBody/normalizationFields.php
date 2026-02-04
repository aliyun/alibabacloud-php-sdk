<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationFieldsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListNormalizationFieldsResponseBody\normalizationFields\normalizationFieldJsonKeys;

class normalizationFields extends Model
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
    public $normalizationFieldDescription;

    /**
     * @var string
     */
    public $normalizationFieldExample;

    /**
     * @var string
     */
    public $normalizationFieldFrom;

    /**
     * @var bool
     */
    public $normalizationFieldJsonIndexAll;

    /**
     * @var normalizationFieldJsonKeys[]
     */
    public $normalizationFieldJsonKeys;

    /**
     * @var string
     */
    public $normalizationFieldName;

    /**
     * @var bool
     */
    public $normalizationFieldRequired;

    /**
     * @var bool
     */
    public $normalizationFieldRequirement;

    /**
     * @var bool
     */
    public $normalizationFieldReserved;

    /**
     * @var bool
     */
    public $normalizationFieldTokenize;

    /**
     * @var string
     */
    public $normalizationFieldType;

    /**
     * @var string
     */
    public $normalizationSchemaId;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'normalizationCategoryId' => 'NormalizationCategoryId',
        'normalizationFieldDescription' => 'NormalizationFieldDescription',
        'normalizationFieldExample' => 'NormalizationFieldExample',
        'normalizationFieldFrom' => 'NormalizationFieldFrom',
        'normalizationFieldJsonIndexAll' => 'NormalizationFieldJsonIndexAll',
        'normalizationFieldJsonKeys' => 'NormalizationFieldJsonKeys',
        'normalizationFieldName' => 'NormalizationFieldName',
        'normalizationFieldRequired' => 'NormalizationFieldRequired',
        'normalizationFieldRequirement' => 'NormalizationFieldRequirement',
        'normalizationFieldReserved' => 'NormalizationFieldReserved',
        'normalizationFieldTokenize' => 'NormalizationFieldTokenize',
        'normalizationFieldType' => 'NormalizationFieldType',
        'normalizationSchemaId' => 'NormalizationSchemaId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->normalizationFieldJsonKeys)) {
            Model::validateArray($this->normalizationFieldJsonKeys);
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

        if (null !== $this->normalizationFieldDescription) {
            $res['NormalizationFieldDescription'] = $this->normalizationFieldDescription;
        }

        if (null !== $this->normalizationFieldExample) {
            $res['NormalizationFieldExample'] = $this->normalizationFieldExample;
        }

        if (null !== $this->normalizationFieldFrom) {
            $res['NormalizationFieldFrom'] = $this->normalizationFieldFrom;
        }

        if (null !== $this->normalizationFieldJsonIndexAll) {
            $res['NormalizationFieldJsonIndexAll'] = $this->normalizationFieldJsonIndexAll;
        }

        if (null !== $this->normalizationFieldJsonKeys) {
            if (\is_array($this->normalizationFieldJsonKeys)) {
                $res['NormalizationFieldJsonKeys'] = [];
                $n1 = 0;
                foreach ($this->normalizationFieldJsonKeys as $item1) {
                    $res['NormalizationFieldJsonKeys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalizationFieldName) {
            $res['NormalizationFieldName'] = $this->normalizationFieldName;
        }

        if (null !== $this->normalizationFieldRequired) {
            $res['NormalizationFieldRequired'] = $this->normalizationFieldRequired;
        }

        if (null !== $this->normalizationFieldRequirement) {
            $res['NormalizationFieldRequirement'] = $this->normalizationFieldRequirement;
        }

        if (null !== $this->normalizationFieldReserved) {
            $res['NormalizationFieldReserved'] = $this->normalizationFieldReserved;
        }

        if (null !== $this->normalizationFieldTokenize) {
            $res['NormalizationFieldTokenize'] = $this->normalizationFieldTokenize;
        }

        if (null !== $this->normalizationFieldType) {
            $res['NormalizationFieldType'] = $this->normalizationFieldType;
        }

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
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

        if (isset($map['NormalizationFieldDescription'])) {
            $model->normalizationFieldDescription = $map['NormalizationFieldDescription'];
        }

        if (isset($map['NormalizationFieldExample'])) {
            $model->normalizationFieldExample = $map['NormalizationFieldExample'];
        }

        if (isset($map['NormalizationFieldFrom'])) {
            $model->normalizationFieldFrom = $map['NormalizationFieldFrom'];
        }

        if (isset($map['NormalizationFieldJsonIndexAll'])) {
            $model->normalizationFieldJsonIndexAll = $map['NormalizationFieldJsonIndexAll'];
        }

        if (isset($map['NormalizationFieldJsonKeys'])) {
            if (!empty($map['NormalizationFieldJsonKeys'])) {
                $model->normalizationFieldJsonKeys = [];
                $n1 = 0;
                foreach ($map['NormalizationFieldJsonKeys'] as $item1) {
                    $model->normalizationFieldJsonKeys[$n1] = normalizationFieldJsonKeys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalizationFieldName'])) {
            $model->normalizationFieldName = $map['NormalizationFieldName'];
        }

        if (isset($map['NormalizationFieldRequired'])) {
            $model->normalizationFieldRequired = $map['NormalizationFieldRequired'];
        }

        if (isset($map['NormalizationFieldRequirement'])) {
            $model->normalizationFieldRequirement = $map['NormalizationFieldRequirement'];
        }

        if (isset($map['NormalizationFieldReserved'])) {
            $model->normalizationFieldReserved = $map['NormalizationFieldReserved'];
        }

        if (isset($map['NormalizationFieldTokenize'])) {
            $model->normalizationFieldTokenize = $map['NormalizationFieldTokenize'];
        }

        if (isset($map['NormalizationFieldType'])) {
            $model->normalizationFieldType = $map['NormalizationFieldType'];
        }

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
