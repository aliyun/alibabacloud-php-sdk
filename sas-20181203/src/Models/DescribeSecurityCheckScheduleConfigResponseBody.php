<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityCheckScheduleConfigResponseBody\riskCheckJobConfig;
use AlibabaCloud\Tea\Model;

class DescribeSecurityCheckScheduleConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var riskCheckJobConfig
     */
    public $riskCheckJobConfig;
    protected $_name = [
        'requestId'          => 'RequestId',
        'riskCheckJobConfig' => 'RiskCheckJobConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskCheckJobConfig) {
            $res['RiskCheckJobConfig'] = null !== $this->riskCheckJobConfig ? $this->riskCheckJobConfig->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskCheckJobConfig'])) {
            $model->riskCheckJobConfig = riskCheckJobConfig::fromMap($map['RiskCheckJobConfig']);
        }

        return $model;
    }
}
