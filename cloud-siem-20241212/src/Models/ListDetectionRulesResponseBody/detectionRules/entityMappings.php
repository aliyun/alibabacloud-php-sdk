<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponseBody\detectionRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDetectionRulesResponseBody\detectionRules\entityMappings\normalizationFieldMappings;

class entityMappings extends Model
{
    /**
     * @var normalizationFieldMappings[]
     */
    public $normalizationFieldMappings;

    /**
     * @var string
     */
    public $normalizationSchemaId;
    protected $_name = [
        'normalizationFieldMappings' => 'NormalizationFieldMappings',
        'normalizationSchemaId' => 'NormalizationSchemaId',
    ];

    public function validate()
    {
        if (\is_array($this->normalizationFieldMappings)) {
            Model::validateArray($this->normalizationFieldMappings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalizationFieldMappings) {
            if (\is_array($this->normalizationFieldMappings)) {
                $res['NormalizationFieldMappings'] = [];
                $n1 = 0;
                foreach ($this->normalizationFieldMappings as $item1) {
                    $res['NormalizationFieldMappings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->normalizationSchemaId) {
            $res['NormalizationSchemaId'] = $this->normalizationSchemaId;
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
        if (isset($map['NormalizationFieldMappings'])) {
            if (!empty($map['NormalizationFieldMappings'])) {
                $model->normalizationFieldMappings = [];
                $n1 = 0;
                foreach ($map['NormalizationFieldMappings'] as $item1) {
                    $model->normalizationFieldMappings[$n1] = normalizationFieldMappings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NormalizationSchemaId'])) {
            $model->normalizationSchemaId = $map['NormalizationSchemaId'];
        }

        return $model;
    }
}
