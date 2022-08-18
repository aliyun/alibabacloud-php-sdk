<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $dohTotalCount;

    /**
     * @var int
     */
    public $domainCount;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $latestThreatTime;

    /**
     * @var string
     */
    public $maxThreatLevel;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var string
     */
    public $threatLevel;

    /**
     * @var string
     */
    public $threatType;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $udpTotalCount;
    protected $_name = [
        'dohTotalCount'    => 'DohTotalCount',
        'domainCount'      => 'DomainCount',
        'domainName'       => 'DomainName',
        'latestThreatTime' => 'LatestThreatTime',
        'maxThreatLevel'   => 'MaxThreatLevel',
        'sourceIp'         => 'SourceIp',
        'subDomain'        => 'SubDomain',
        'threatLevel'      => 'ThreatLevel',
        'threatType'       => 'ThreatType',
        'totalCount'       => 'TotalCount',
        'udpTotalCount'    => 'UdpTotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dohTotalCount) {
            $res['DohTotalCount'] = $this->dohTotalCount;
        }
        if (null !== $this->domainCount) {
            $res['DomainCount'] = $this->domainCount;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->latestThreatTime) {
            $res['LatestThreatTime'] = $this->latestThreatTime;
        }
        if (null !== $this->maxThreatLevel) {
            $res['MaxThreatLevel'] = $this->maxThreatLevel;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }
        if (null !== $this->threatType) {
            $res['ThreatType'] = $this->threatType;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->udpTotalCount) {
            $res['UdpTotalCount'] = $this->udpTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DohTotalCount'])) {
            $model->dohTotalCount = $map['DohTotalCount'];
        }
        if (isset($map['DomainCount'])) {
            $model->domainCount = $map['DomainCount'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LatestThreatTime'])) {
            $model->latestThreatTime = $map['LatestThreatTime'];
        }
        if (isset($map['MaxThreatLevel'])) {
            $model->maxThreatLevel = $map['MaxThreatLevel'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }
        if (isset($map['ThreatType'])) {
            $model->threatType = $map['ThreatType'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UdpTotalCount'])) {
            $model->udpTotalCount = $map['UdpTotalCount'];
        }

        return $model;
    }
}
