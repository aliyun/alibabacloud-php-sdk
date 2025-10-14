<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationSchemaResponseBody\normalizationSchema;

class GetNormalizationSchemaResponseBody extends Model
{
    /**
     * @var normalizationSchema
     */
    public $normalizationSchema;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'normalizationSchema' => 'NormalizationSchema',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->normalizationSchema) {
            $this->normalizationSchema->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalizationSchema) {
            $res['NormalizationSchema'] = null !== $this->normalizationSchema ? $this->normalizationSchema->toArray($noStream) : $this->normalizationSchema;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NormalizationSchema'])) {
            $model->normalizationSchema = normalizationSchema::fromMap($map['NormalizationSchema']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
