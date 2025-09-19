<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSecurityCheckScheduleConfigResponseBody\riskCheckJobConfig;

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
        'requestId' => 'RequestId',
        'riskCheckJobConfig' => 'RiskCheckJobConfig',
    ];

    public function validate()
    {
        if (null !== $this->riskCheckJobConfig) {
            $this->riskCheckJobConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskCheckJobConfig) {
            $res['RiskCheckJobConfig'] = null !== $this->riskCheckJobConfig ? $this->riskCheckJobConfig->toArray($noStream) : $this->riskCheckJobConfig;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskCheckJobConfig'])) {
            $model->riskCheckJobConfig = riskCheckJobConfig::fromMap($map['RiskCheckJobConfig']);
        }

        return $model;
    }
}
