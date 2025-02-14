<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetDockerhubImageRiskStatisticResponseBody\riskRankInfo;

class GetDockerhubImageRiskStatisticResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var riskRankInfo
     */
    public $riskRankInfo;
    protected $_name = [
        'requestId'    => 'RequestId',
        'riskRankInfo' => 'RiskRankInfo',
    ];

    public function validate()
    {
        if (null !== $this->riskRankInfo) {
            $this->riskRankInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskRankInfo) {
            $res['RiskRankInfo'] = null !== $this->riskRankInfo ? $this->riskRankInfo->toArray($noStream) : $this->riskRankInfo;
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

        if (isset($map['RiskRankInfo'])) {
            $model->riskRankInfo = riskRankInfo::fromMap($map['RiskRankInfo']);
        }

        return $model;
    }
}
