<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaResponseBody\normalizationSchema\normalizationFields;

use AlibabaCloud\Dara\Model;

class normalizationFieldJsonKeys extends Model
{
    /**
     * @var int
     */
    public $createTime;

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
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'normalizationFieldDescription' => 'NormalizationFieldDescription',
        'normalizationFieldExample' => 'NormalizationFieldExample',
        'normalizationFieldFrom' => 'NormalizationFieldFrom',
        'normalizationFieldName' => 'NormalizationFieldName',
        'normalizationFieldRequired' => 'NormalizationFieldRequired',
        'normalizationFieldReserved' => 'NormalizationFieldReserved',
        'normalizationFieldTokenize' => 'NormalizationFieldTokenize',
        'normalizationFieldType' => 'NormalizationFieldType',
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

        if (null !== $this->normalizationFieldDescription) {
            $res['NormalizationFieldDescription'] = $this->normalizationFieldDescription;
        }

        if (null !== $this->normalizationFieldExample) {
            $res['NormalizationFieldExample'] = $this->normalizationFieldExample;
        }

        if (null !== $this->normalizationFieldFrom) {
            $res['NormalizationFieldFrom'] = $this->normalizationFieldFrom;
        }

        if (null !== $this->normalizationFieldName) {
            $res['NormalizationFieldName'] = $this->normalizationFieldName;
        }

        if (null !== $this->normalizationFieldRequired) {
            $res['NormalizationFieldRequired'] = $this->normalizationFieldRequired;
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

        if (isset($map['NormalizationFieldDescription'])) {
            $model->normalizationFieldDescription = $map['NormalizationFieldDescription'];
        }

        if (isset($map['NormalizationFieldExample'])) {
            $model->normalizationFieldExample = $map['NormalizationFieldExample'];
        }

        if (isset($map['NormalizationFieldFrom'])) {
            $model->normalizationFieldFrom = $map['NormalizationFieldFrom'];
        }

        if (isset($map['NormalizationFieldName'])) {
            $model->normalizationFieldName = $map['NormalizationFieldName'];
        }

        if (isset($map['NormalizationFieldRequired'])) {
            $model->normalizationFieldRequired = $map['NormalizationFieldRequired'];
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

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
