<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetNormalizationRuleVersionResponseBody\normalizationRuleVersion;

class GetNormalizationRuleVersionResponseBody extends Model
{
    /**
     * @var normalizationRuleVersion
     */
    public $normalizationRuleVersion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'normalizationRuleVersion' => 'NormalizationRuleVersion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->normalizationRuleVersion) {
            $this->normalizationRuleVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->normalizationRuleVersion) {
            $res['NormalizationRuleVersion'] = null !== $this->normalizationRuleVersion ? $this->normalizationRuleVersion->toArray($noStream) : $this->normalizationRuleVersion;
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
        if (isset($map['NormalizationRuleVersion'])) {
            $model->normalizationRuleVersion = normalizationRuleVersion::fromMap($map['NormalizationRuleVersion']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
