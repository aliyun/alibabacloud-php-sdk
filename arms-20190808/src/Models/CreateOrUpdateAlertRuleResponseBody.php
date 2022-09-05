<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateAlertRuleResponseBody\alertRule;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateAlertRuleResponseBody extends Model
{
    /**
     * @var alertRule
     */
    public $alertRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'alertRule' => 'AlertRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertRule) {
            $res['AlertRule'] = null !== $this->alertRule ? $this->alertRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateAlertRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertRule'])) {
            $model->alertRule = alertRule::fromMap($map['AlertRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
