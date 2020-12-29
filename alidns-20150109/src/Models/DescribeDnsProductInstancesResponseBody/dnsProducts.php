<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class dnsProducts extends Model
{
    /**
     * @var string
     */
    public $overseaLine;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var int
     */
    public $monitorNodeCount;

    /**
     * @var bool
     */
    public $inBlackHole;

    /**
     * @var int
     */
    public $bindDomainUsedCount;

    /**
     * @var string
     */
    public $ISPRegionLines;

    /**
     * @var int
     */
    public $TTLMinValue;

    /**
     * @var string
     */
    public $ISPLines;

    /**
     * @var string
     */
    public $searchEngineLines;

    /**
     * @var int
     */
    public $endTimestamp;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var string
     */
    public $versionCode;

    /**
     * @var int
     */
    public $monitorTaskCount;

    /**
     * @var int
     */
    public $bindUsedCount;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $monitorFrequency;

    /**
     * @var bool
     */
    public $inClean;

    /**
     * @var int
     */
    public $URLForwardCount;

    /**
     * @var int
     */
    public $startTimestamp;

    /**
     * @var int
     */
    public $DDosDefendQuery;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $DDosDefendFlow;

    /**
     * @var int
     */
    public $bindCount;

    /**
     * @var int
     */
    public $subDomainLevel;

    /**
     * @var int
     */
    public $bindDomainCount;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $overseaDDosDefendFlow;

    /**
     * @var bool
     */
    public $regionLines;

    /**
     * @var bool
     */
    public $gslb;

    /**
     * @var string
     */
    public $dnsSecurity;

    /**
     * @var int
     */
    public $dnsSLBCount;
    protected $_name = [
        'overseaLine'           => 'OverseaLine',
        'paymentType'           => 'PaymentType',
        'monitorNodeCount'      => 'MonitorNodeCount',
        'inBlackHole'           => 'InBlackHole',
        'bindDomainUsedCount'   => 'BindDomainUsedCount',
        'ISPRegionLines'        => 'ISPRegionLines',
        'TTLMinValue'           => 'TTLMinValue',
        'ISPLines'              => 'ISPLines',
        'searchEngineLines'     => 'SearchEngineLines',
        'endTimestamp'          => 'EndTimestamp',
        'versionName'           => 'VersionName',
        'versionCode'           => 'VersionCode',
        'monitorTaskCount'      => 'MonitorTaskCount',
        'bindUsedCount'         => 'BindUsedCount',
        'domain'                => 'Domain',
        'monitorFrequency'      => 'MonitorFrequency',
        'inClean'               => 'InClean',
        'URLForwardCount'       => 'URLForwardCount',
        'startTimestamp'        => 'StartTimestamp',
        'DDosDefendQuery'       => 'DDosDefendQuery',
        'instanceId'            => 'InstanceId',
        'DDosDefendFlow'        => 'DDosDefendFlow',
        'bindCount'             => 'BindCount',
        'subDomainLevel'        => 'SubDomainLevel',
        'bindDomainCount'       => 'BindDomainCount',
        'endTime'               => 'EndTime',
        'startTime'             => 'StartTime',
        'overseaDDosDefendFlow' => 'OverseaDDosDefendFlow',
        'regionLines'           => 'RegionLines',
        'gslb'                  => 'Gslb',
        'dnsSecurity'           => 'DnsSecurity',
        'dnsSLBCount'           => 'DnsSLBCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overseaLine) {
            $res['OverseaLine'] = $this->overseaLine;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->monitorNodeCount) {
            $res['MonitorNodeCount'] = $this->monitorNodeCount;
        }
        if (null !== $this->inBlackHole) {
            $res['InBlackHole'] = $this->inBlackHole;
        }
        if (null !== $this->bindDomainUsedCount) {
            $res['BindDomainUsedCount'] = $this->bindDomainUsedCount;
        }
        if (null !== $this->ISPRegionLines) {
            $res['ISPRegionLines'] = $this->ISPRegionLines;
        }
        if (null !== $this->TTLMinValue) {
            $res['TTLMinValue'] = $this->TTLMinValue;
        }
        if (null !== $this->ISPLines) {
            $res['ISPLines'] = $this->ISPLines;
        }
        if (null !== $this->searchEngineLines) {
            $res['SearchEngineLines'] = $this->searchEngineLines;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->monitorTaskCount) {
            $res['MonitorTaskCount'] = $this->monitorTaskCount;
        }
        if (null !== $this->bindUsedCount) {
            $res['BindUsedCount'] = $this->bindUsedCount;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->monitorFrequency) {
            $res['MonitorFrequency'] = $this->monitorFrequency;
        }
        if (null !== $this->inClean) {
            $res['InClean'] = $this->inClean;
        }
        if (null !== $this->URLForwardCount) {
            $res['URLForwardCount'] = $this->URLForwardCount;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->DDosDefendQuery) {
            $res['DDosDefendQuery'] = $this->DDosDefendQuery;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->DDosDefendFlow) {
            $res['DDosDefendFlow'] = $this->DDosDefendFlow;
        }
        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }
        if (null !== $this->subDomainLevel) {
            $res['SubDomainLevel'] = $this->subDomainLevel;
        }
        if (null !== $this->bindDomainCount) {
            $res['BindDomainCount'] = $this->bindDomainCount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->overseaDDosDefendFlow) {
            $res['OverseaDDosDefendFlow'] = $this->overseaDDosDefendFlow;
        }
        if (null !== $this->regionLines) {
            $res['RegionLines'] = $this->regionLines;
        }
        if (null !== $this->gslb) {
            $res['Gslb'] = $this->gslb;
        }
        if (null !== $this->dnsSecurity) {
            $res['DnsSecurity'] = $this->dnsSecurity;
        }
        if (null !== $this->dnsSLBCount) {
            $res['DnsSLBCount'] = $this->dnsSLBCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnsProducts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverseaLine'])) {
            $model->overseaLine = $map['OverseaLine'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['MonitorNodeCount'])) {
            $model->monitorNodeCount = $map['MonitorNodeCount'];
        }
        if (isset($map['InBlackHole'])) {
            $model->inBlackHole = $map['InBlackHole'];
        }
        if (isset($map['BindDomainUsedCount'])) {
            $model->bindDomainUsedCount = $map['BindDomainUsedCount'];
        }
        if (isset($map['ISPRegionLines'])) {
            $model->ISPRegionLines = $map['ISPRegionLines'];
        }
        if (isset($map['TTLMinValue'])) {
            $model->TTLMinValue = $map['TTLMinValue'];
        }
        if (isset($map['ISPLines'])) {
            $model->ISPLines = $map['ISPLines'];
        }
        if (isset($map['SearchEngineLines'])) {
            $model->searchEngineLines = $map['SearchEngineLines'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['MonitorTaskCount'])) {
            $model->monitorTaskCount = $map['MonitorTaskCount'];
        }
        if (isset($map['BindUsedCount'])) {
            $model->bindUsedCount = $map['BindUsedCount'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['MonitorFrequency'])) {
            $model->monitorFrequency = $map['MonitorFrequency'];
        }
        if (isset($map['InClean'])) {
            $model->inClean = $map['InClean'];
        }
        if (isset($map['URLForwardCount'])) {
            $model->URLForwardCount = $map['URLForwardCount'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['DDosDefendQuery'])) {
            $model->DDosDefendQuery = $map['DDosDefendQuery'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DDosDefendFlow'])) {
            $model->DDosDefendFlow = $map['DDosDefendFlow'];
        }
        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }
        if (isset($map['SubDomainLevel'])) {
            $model->subDomainLevel = $map['SubDomainLevel'];
        }
        if (isset($map['BindDomainCount'])) {
            $model->bindDomainCount = $map['BindDomainCount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['OverseaDDosDefendFlow'])) {
            $model->overseaDDosDefendFlow = $map['OverseaDDosDefendFlow'];
        }
        if (isset($map['RegionLines'])) {
            $model->regionLines = $map['RegionLines'];
        }
        if (isset($map['Gslb'])) {
            $model->gslb = $map['Gslb'];
        }
        if (isset($map['DnsSecurity'])) {
            $model->dnsSecurity = $map['DnsSecurity'];
        }
        if (isset($map['DnsSLBCount'])) {
            $model->dnsSLBCount = $map['DnsSLBCount'];
        }

        return $model;
    }
}
