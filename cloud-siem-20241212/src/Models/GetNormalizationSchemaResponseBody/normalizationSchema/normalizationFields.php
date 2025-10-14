<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaResponseBody\normalizationSchema;

use AlibabaCloud\Dara\Model;

class normalizationFields extends Model
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
    public $normalizationFieldName;

    /**
     * @var bool
     */
    public $normalizationFieldRequirement;

    /**
     * @var bool
     */
    public $normalizationFieldReserved;

    /**
     * @var string
     */
    public $normalizationFieldType;
    protected $_name = [
        'normalizationFieldDescription' => 'NormalizationFieldDescription',
        'normalizationFieldExample' => 'NormalizationFieldExample',
        'normalizationFieldName' => 'NormalizationFieldName',
        'normalizationFieldRequirement' => 'NormalizationFieldRequirement',
        'normalizationFieldReserved' => 'NormalizationFieldReserved',
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

        if (null !== $this->normalizationFieldName) {
            $res['NormalizationFieldName'] = $this->normalizationFieldName;
        }

        if (null !== $this->normalizationFieldRequirement) {
            $res['NormalizationFieldRequirement'] = $this->normalizationFieldRequirement;
        }

        if (null !== $this->normalizationFieldReserved) {
            $res['NormalizationFieldReserved'] = $this->normalizationFieldReserved;
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

        if (isset($map['NormalizationFieldName'])) {
            $model->normalizationFieldName = $map['NormalizationFieldName'];
        }

        if (isset($map['NormalizationFieldRequirement'])) {
            $model->normalizationFieldRequirement = $map['NormalizationFieldRequirement'];
        }

        if (isset($map['NormalizationFieldReserved'])) {
            $model->normalizationFieldReserved = $map['NormalizationFieldReserved'];
        }

        if (isset($map['NormalizationFieldType'])) {
            $model->normalizationFieldType = $map['NormalizationFieldType'];
        }

        return $model;
    }
}
