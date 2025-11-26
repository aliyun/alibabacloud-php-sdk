<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeOutgoingRiskDomainAndIpCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $riskDomainCount;

    /**
     * @var int
     */
    public $riskIpCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskDomainCount' => 'RiskDomainCount',
        'riskIpCount' => 'RiskIpCount',
        'totalCount' => 'TotalCount',
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

        if (null !== $this->riskDomainCount) {
            $res['RiskDomainCount'] = $this->riskDomainCount;
        }

        if (null !== $this->riskIpCount) {
            $res['RiskIpCount'] = $this->riskIpCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['RiskDomainCount'])) {
            $model->riskDomainCount = $map['RiskDomainCount'];
        }

        if (isset($map['RiskIpCount'])) {
            $model->riskIpCount = $map['RiskIpCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
