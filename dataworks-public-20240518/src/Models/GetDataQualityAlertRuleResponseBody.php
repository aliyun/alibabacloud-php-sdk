<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityAlertRuleResponseBody\dataQualityAlertRule;
use AlibabaCloud\Tea\Model;

class GetDataQualityAlertRuleResponseBody extends Model
{
    /**
     * @var dataQualityAlertRule
     */
    public $dataQualityAlertRule;

    /**
     * @example 0bc14115****159376359
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataQualityAlertRule' => 'DataQualityAlertRule',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataQualityAlertRule) {
            $res['DataQualityAlertRule'] = null !== $this->dataQualityAlertRule ? $this->dataQualityAlertRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityAlertRuleResponseBody
     */
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
