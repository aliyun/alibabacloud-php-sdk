<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\UpdateNormalizationSchemaRequest\normalizationFields;

use AlibabaCloud\Dara\Model;

class normalizationFieldJsonKeys extends Model
{
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
    public $normalizationFieldTokenize;

    /**
     * @var string
     */
    public $normalizationFieldType;
    protected $_name = [
        'normalizationFieldDescription' => 'NormalizationFieldDescription',
        'normalizationFieldExample' => 'NormalizationFieldExample',
        'normalizationFieldFrom' => 'NormalizationFieldFrom',
        'normalizationFieldName' => 'NormalizationFieldName',
        'normalizationFieldRequired' => 'NormalizationFieldRequired',
        'normalizationFieldTokenize' => 'NormalizationFieldTokenize',
        'normalizationFieldType' => 'NormalizationFieldType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->normalizationFieldTokenize) {
            $res['NormalizationFieldTokenize'] = $this->normalizationFieldTokenize;
        }

        if (null !== $this->normalizationFieldType) {
            $res['NormalizationFieldType'] = $this->normalizationFieldType;
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

        if (isset($map['NormalizationFieldTokenize'])) {
            $model->normalizationFieldTokenize = $map['NormalizationFieldTokenize'];
        }

        if (isset($map['NormalizationFieldType'])) {
            $model->normalizationFieldType = $map['NormalizationFieldType'];
        }

        return $model;
    }
}
