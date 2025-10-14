<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponseBody\detectionRules\entityMappings;

use AlibabaCloud\Dara\Model;

class normalizationFieldMappings extends Model
{
    /**
     * @var string
     */
    public $mappingFieldName;

    /**
     * @var string
     */
    public $normalizationFieldName;

    /**
     * @var string
     */
    public $normalizationFieldType;
    protected $_name = [
        'mappingFieldName' => 'MappingFieldName',
        'normalizationFieldName' => 'NormalizationFieldName',
        'normalizationFieldType' => 'NormalizationFieldType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mappingFieldName) {
            $res['MappingFieldName'] = $this->mappingFieldName;
        }

        if (null !== $this->normalizationFieldName) {
            $res['NormalizationFieldName'] = $this->normalizationFieldName;
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
        if (isset($map['MappingFieldName'])) {
            $model->mappingFieldName = $map['MappingFieldName'];
        }

        if (isset($map['NormalizationFieldName'])) {
            $model->normalizationFieldName = $map['NormalizationFieldName'];
        }

        if (isset($map['NormalizationFieldType'])) {
            $model->normalizationFieldType = $map['NormalizationFieldType'];
        }

        return $model;
    }
}
