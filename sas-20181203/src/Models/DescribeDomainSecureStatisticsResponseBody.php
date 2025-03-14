<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDomainSecureStatisticsResponseBody extends Model
{
    /**
     * @description The number of domain names that trigger security alerts.
     *
     * @example 2
     *
     * @var int
     */
    public $alarmCount;

    /**
     * @description The number of the websites for which no certificates are installed.
     *
     * @example 1
     *
     * @var int
     */
    public $noSslCount;

    /**
     * @description The request ID.
     *
     * @example 1EE7B150-D67E-53FD-A52D-3E8E669A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of the domain names that have security risks.
     *
     * @example 1
     *
     * @var int
     */
    public $riskCount;

    /**
     * @description The total number of domain names.
     *
     * @example 72
     *
     * @var int
     */
    public $totalDomainCount;

    /**
     * @description The number of the domain names that have vulnerabilities.
     *
     * @example 2
     *
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'alarmCount' => 'AlarmCount',
        'noSslCount' => 'NoSslCount',
        'requestId' => 'RequestId',
        'riskCount' => 'RiskCount',
        'totalDomainCount' => 'TotalDomainCount',
        'vulCount' => 'VulCount',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeDomainSecureStatisticsResponseBody
     */
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
