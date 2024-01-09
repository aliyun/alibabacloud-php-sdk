<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairsResponseBody\sitePairs;

use AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairsResponseBody\sitePairs\sitePair\replicationStatistics;
use AlibabaCloud\Tea\Model;

class sitePair extends Model
{
    /**
     * @example cloud-site
     *
     * @var string
     */
    public $cloudSiteName;

    /**
     * @example 1636092147
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example local-site
     *
     * @var string
     */
    public $localSiteName;

    /**
     * @example si-000as7kbj0cmlp3tt60m
     *
     * @var string
     */
    public $primarySiteId;

    /**
     * @example HZ
     *
     * @var string
     */
    public $primarySiteName;

    /**
     * @var replicationStatistics
     */
    public $replicationStatistics;

    /**
     * @example si-0007nrkb2riv9yalg8s8
     *
     * @var string
     */
    public $secondarySiteId;

    /**
     * @example SH
     *
     * @var string
     */
    public $secondarySiteName;

    /**
     * @example 14
     *
     * @var int
     */
    public $serverCount;

    /**
     * @example s-0003obqyc8f8lx2pf6m9
     *
     * @var string
     */
    public $sitePairId;

    /**
     * @example cloud2cloud
     *
     * @var string
     */
    public $sitePairType;

    /**
     * @example 3.7.3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'cloudSiteName'         => 'CloudSiteName',
        'createdTime'           => 'CreatedTime',
        'localSiteName'         => 'LocalSiteName',
        'primarySiteId'         => 'PrimarySiteId',
        'primarySiteName'       => 'PrimarySiteName',
        'replicationStatistics' => 'ReplicationStatistics',
        'secondarySiteId'       => 'SecondarySiteId',
        'secondarySiteName'     => 'SecondarySiteName',
        'serverCount'           => 'ServerCount',
        'sitePairId'            => 'SitePairId',
        'sitePairType'          => 'SitePairType',
        'version'               => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudSiteName) {
            $res['CloudSiteName'] = $this->cloudSiteName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->localSiteName) {
            $res['LocalSiteName'] = $this->localSiteName;
        }
        if (null !== $this->primarySiteId) {
            $res['PrimarySiteId'] = $this->primarySiteId;
        }
        if (null !== $this->primarySiteName) {
            $res['PrimarySiteName'] = $this->primarySiteName;
        }
        if (null !== $this->replicationStatistics) {
            $res['ReplicationStatistics'] = null !== $this->replicationStatistics ? $this->replicationStatistics->toMap() : null;
        }
        if (null !== $this->secondarySiteId) {
            $res['SecondarySiteId'] = $this->secondarySiteId;
        }
        if (null !== $this->secondarySiteName) {
            $res['SecondarySiteName'] = $this->secondarySiteName;
        }
        if (null !== $this->serverCount) {
            $res['ServerCount'] = $this->serverCount;
        }
        if (null !== $this->sitePairId) {
            $res['SitePairId'] = $this->sitePairId;
        }
        if (null !== $this->sitePairType) {
            $res['SitePairType'] = $this->sitePairType;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sitePair
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudSiteName'])) {
            $model->cloudSiteName = $map['CloudSiteName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['LocalSiteName'])) {
            $model->localSiteName = $map['LocalSiteName'];
        }
        if (isset($map['PrimarySiteId'])) {
            $model->primarySiteId = $map['PrimarySiteId'];
        }
        if (isset($map['PrimarySiteName'])) {
            $model->primarySiteName = $map['PrimarySiteName'];
        }
        if (isset($map['ReplicationStatistics'])) {
            $model->replicationStatistics = replicationStatistics::fromMap($map['ReplicationStatistics']);
        }
        if (isset($map['SecondarySiteId'])) {
            $model->secondarySiteId = $map['SecondarySiteId'];
        }
        if (isset($map['SecondarySiteName'])) {
            $model->secondarySiteName = $map['SecondarySiteName'];
        }
        if (isset($map['ServerCount'])) {
            $model->serverCount = $map['ServerCount'];
        }
        if (isset($map['SitePairId'])) {
            $model->sitePairId = $map['SitePairId'];
        }
        if (isset($map['SitePairType'])) {
            $model->sitePairType = $map['SitePairType'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
