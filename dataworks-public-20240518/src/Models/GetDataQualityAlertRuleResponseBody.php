<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityAlertRuleResponseBody\dataQualityAlertRule;

class GetDataQualityAlertRuleResponseBody extends Model
{
    /**
     * @var dataQualityAlertRule
     */
    public $dataQualityAlertRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityAlertRule' => 'DataQualityAlertRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataQualityAlertRule) {
            $this->dataQualityAlertRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataQualityAlertRule) {
            $res['DataQualityAlertRule'] = null !== $this->dataQualityAlertRule ? $this->dataQualityAlertRule->toArray($noStream) : $this->dataQualityAlertRule;
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
        if (isset($map['DataQualityAlertRule'])) {
            $model->dataQualityAlertRule = dataQualityAlertRule::fromMap($map['DataQualityAlertRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
