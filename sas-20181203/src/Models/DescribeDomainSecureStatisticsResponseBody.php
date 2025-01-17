<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeDomainSecureStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $alarmCount;
    /**
     * @var int
     */
    public $noSslCount;
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
    public $totalDomainCount;
    /**
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount'       => 'AlarmCount',
        'noSslCount'       => 'NoSslCount',
        'requestId'        => 'RequestId',
        'riskCount'        => 'RiskCount',
        'totalDomainCount' => 'TotalDomainCount',
        'vulCount'         => 'VulCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }

        if (null !== $this->noSslCount) {
            $res['NoSslCount'] = $this->noSslCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->totalDomainCount) {
            $res['TotalDomainCount'] = $this->totalDomainCount;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
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
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }

        if (isset($map['NoSslCount'])) {
            $model->noSslCount = $map['NoSslCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['TotalDomainCount'])) {
            $model->totalDomainCount = $map['TotalDomainCount'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
