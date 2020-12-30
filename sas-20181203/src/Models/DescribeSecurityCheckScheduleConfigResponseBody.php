<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityCheckScheduleConfigResponseBody\riskCheckJobConfig;
use AlibabaCloud\Tea\Model;

class DescribeSecurityCheckScheduleConfigResponseBody extends Model
{
    /**
     * @var riskCheckJobConfig
     */
    public $riskCheckJobConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'riskCheckJobConfig' => 'RiskCheckJobConfig',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskCheckJobConfig) {
            $res['RiskCheckJobConfig'] = null !== $this->riskCheckJobConfig ? $this->riskCheckJobConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityCheckScheduleConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskCheckJobConfig'])) {
            $model->riskCheckJobConfig = riskCheckJobConfig::fromMap($map['RiskCheckJobConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
