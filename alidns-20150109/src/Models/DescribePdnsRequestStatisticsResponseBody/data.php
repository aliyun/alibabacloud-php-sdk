<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticsResponseBody\data\threatInfo;

class data extends Model
{
    /**
     * @var int
     */
    public $dohTotalCount;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $httpCount;

    /**
     * @var int
     */
    public $httpsCount;

    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var string
     */
    public $maxThreatLevel;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var int
     */
    public $threatCount;

    /**
     * @var threatInfo[]
     */
    public $threatInfo;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $udpTotalCount;

    /**
     * @var int
     */
    public $v4Count;

    /**
     * @var int
     */
    public $v4HttpCount;

    /**
     * @var int
     */
    public $v4HttpsCount;

    /**
     * @var int
     */
    public $v6Count;

    /**
     * @var int
     */
    public $v6HttpCount;

    /**
     * @var int
     */
    public $v6HttpsCount;
    protected $_name = [
        'dohTotalCount' => 'DohTotalCount',
        'domainName' => 'DomainName',
        'httpCount' => 'HttpCount',
        'httpsCount' => 'HttpsCount',
        'ipCount' => 'IpCount',
        'maxThreatLevel' => 'MaxThreatLevel',
        'subDomain' => 'SubDomain',
        'threatCount' => 'ThreatCount',
        'threatInfo' => 'ThreatInfo',
        'totalCount' => 'TotalCount',
        'udpTotalCount' => 'UdpTotalCount',
        'v4Count' => 'V4Count',
        'v4HttpCount' => 'V4HttpCount',
        'v4HttpsCount' => 'V4HttpsCount',
        'v6Count' => 'V6Count',
        'v6HttpCount' => 'V6HttpCount',
        'v6HttpsCount' => 'V6HttpsCount',
    ];

    public function validate()
    {
        if (\is_array($this->threatInfo)) {
            Model::validateArray($this->threatInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dohTotalCount) {
            $res['DohTotalCount'] = $this->dohTotalCount;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->httpCount) {
            $res['HttpCount'] = $this->httpCount;
        }

        if (null !== $this->httpsCount) {
            $res['HttpsCount'] = $this->httpsCount;
        }

        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }

        if (null !== $this->maxThreatLevel) {
            $res['MaxThreatLevel'] = $this->maxThreatLevel;
        }

        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        if (null !== $this->threatCount) {
            $res['ThreatCount'] = $this->threatCount;
        }

        if (null !== $this->threatInfo) {
            if (\is_array($this->threatInfo)) {
                $res['ThreatInfo'] = [];
                $n1 = 0;
                foreach ($this->threatInfo as $item1) {
                    $res['ThreatInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->udpTotalCount) {
            $res['UdpTotalCount'] = $this->udpTotalCount;
        }

        if (null !== $this->v4Count) {
            $res['V4Count'] = $this->v4Count;
        }

        if (null !== $this->v4HttpCount) {
            $res['V4HttpCount'] = $this->v4HttpCount;
        }

        if (null !== $this->v4HttpsCount) {
            $res['V4HttpsCount'] = $this->v4HttpsCount;
        }

        if (null !== $this->v6Count) {
            $res['V6Count'] = $this->v6Count;
        }

        if (null !== $this->v6HttpCount) {
            $res['V6HttpCount'] = $this->v6HttpCount;
        }

        if (null !== $this->v6HttpsCount) {
            $res['V6HttpsCount'] = $this->v6HttpsCount;
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
        if (isset($map['DohTotalCount'])) {
            $model->dohTotalCount = $map['DohTotalCount'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['HttpCount'])) {
            $model->httpCount = $map['HttpCount'];
        }

        if (isset($map['HttpsCount'])) {
            $model->httpsCount = $map['HttpsCount'];
        }

        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }

        if (isset($map['MaxThreatLevel'])) {
            $model->maxThreatLevel = $map['MaxThreatLevel'];
        }

        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        if (isset($map['ThreatCount'])) {
            $model->threatCount = $map['ThreatCount'];
        }

        if (isset($map['ThreatInfo'])) {
            if (!empty($map['ThreatInfo'])) {
                $model->threatInfo = [];
                $n1 = 0;
                foreach ($map['ThreatInfo'] as $item1) {
                    $model->threatInfo[$n1] = threatInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UdpTotalCount'])) {
            $model->udpTotalCount = $map['UdpTotalCount'];
        }

        if (isset($map['V4Count'])) {
            $model->v4Count = $map['V4Count'];
        }

        if (isset($map['V4HttpCount'])) {
            $model->v4HttpCount = $map['V4HttpCount'];
        }

        if (isset($map['V4HttpsCount'])) {
            $model->v4HttpsCount = $map['V4HttpsCount'];
        }

        if (isset($map['V6Count'])) {
            $model->v6Count = $map['V6Count'];
        }

        if (isset($map['V6HttpCount'])) {
            $model->v6HttpCount = $map['V6HttpCount'];
        }

        if (isset($map['V6HttpsCount'])) {
            $model->v6HttpsCount = $map['V6HttpsCount'];
        }

        return $model;
    }
}
