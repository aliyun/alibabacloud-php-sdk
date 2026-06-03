<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;

class GetAuditCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $sqlCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskCount' => 'RiskCount',
        'sessionCount' => 'SessionCount',
        'sqlCount' => 'SqlCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
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

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }

        return $model;
    }
}
