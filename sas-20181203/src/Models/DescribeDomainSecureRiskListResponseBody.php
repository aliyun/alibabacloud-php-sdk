<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDomainSecureRiskListResponseBody\riskList;
use AlibabaCloud\Tea\Model;

class DescribeDomainSecureRiskListResponseBody extends Model
{
    /**
     * @description The number of the websites for which no certificates are installed.
     *
     * @example 1
     *
     * @var int
     */
    public $noSslCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example CE500770-42D3-442E-9DDD-156E0F9F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of risks.
     *
     * @example 1
     *
     * @var int
     */
    public $riskCount;

    /**
     * @description The risks.
     *
     * @var riskList[]
     */
    public $riskList;
    protected $_name = [
        'noSslCount' => 'NoSslCount',
        'requestId'  => 'RequestId',
        'riskCount'  => 'RiskCount',
        'riskList'   => 'RiskList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->noSslCount) {
            $res['NoSslCount'] = $this->noSslCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->riskList) {
            $res['RiskList'] = [];
            if (null !== $this->riskList && \is_array($this->riskList)) {
                $n = 0;
                foreach ($this->riskList as $item) {
                    $res['RiskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainSecureRiskListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NoSslCount'])) {
            $model->noSslCount = $map['NoSslCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['RiskList'])) {
            if (!empty($map['RiskList'])) {
                $model->riskList = [];
                $n               = 0;
                foreach ($map['RiskList'] as $item) {
                    $model->riskList[$n++] = null !== $item ? riskList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
