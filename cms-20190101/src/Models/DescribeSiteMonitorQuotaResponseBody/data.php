<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the second-level monitoring is enabled. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $secondMonitor;

    /**
     * @description The quota of detection points that are provided by Alibaba Cloud. Five detection points are provided for free.
     *
     * @example 5
     *
     * @var int
     */
    public $siteMonitorIdcQuota;

    /**
     * @description The quota of detection points that are not provided by Alibaba Cloud. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteMonitorOperatorQuotaQuota;

    /**
     * @description The used quota of site monitoring tasks.
     *
     * @example 6
     *
     * @var int
     */
    public $siteMonitorQuotaTaskUsed;

    /**
     * @description The quota of site monitoring tasks.
     *
     * @example 10
     *
     * @var int
     */
    public $siteMonitorTaskQuota;

    /**
     * @description The version of site monitoring. Valid values:
     *
     *   V1
     *   V2
     *
     * @example V1
     *
     * @var string
     */
    public $siteMonitorVersion;
    protected $_name = [
        'secondMonitor'                 => 'SecondMonitor',
        'siteMonitorIdcQuota'           => 'SiteMonitorIdcQuota',
        'siteMonitorOperatorQuotaQuota' => 'SiteMonitorOperatorQuotaQuota',
        'siteMonitorQuotaTaskUsed'      => 'SiteMonitorQuotaTaskUsed',
        'siteMonitorTaskQuota'          => 'SiteMonitorTaskQuota',
        'siteMonitorVersion'            => 'SiteMonitorVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secondMonitor) {
            $res['SecondMonitor'] = $this->secondMonitor;
        }
        if (null !== $this->siteMonitorIdcQuota) {
            $res['SiteMonitorIdcQuota'] = $this->siteMonitorIdcQuota;
        }
        if (null !== $this->siteMonitorOperatorQuotaQuota) {
            $res['SiteMonitorOperatorQuotaQuota'] = $this->siteMonitorOperatorQuotaQuota;
        }
        if (null !== $this->siteMonitorQuotaTaskUsed) {
            $res['SiteMonitorQuotaTaskUsed'] = $this->siteMonitorQuotaTaskUsed;
        }
        if (null !== $this->siteMonitorTaskQuota) {
            $res['SiteMonitorTaskQuota'] = $this->siteMonitorTaskQuota;
        }
        if (null !== $this->siteMonitorVersion) {
            $res['SiteMonitorVersion'] = $this->siteMonitorVersion;
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
        if (isset($map['SecondMonitor'])) {
            $model->secondMonitor = $map['SecondMonitor'];
        }
        if (isset($map['SiteMonitorIdcQuota'])) {
            $model->siteMonitorIdcQuota = $map['SiteMonitorIdcQuota'];
        }
        if (isset($map['SiteMonitorOperatorQuotaQuota'])) {
            $model->siteMonitorOperatorQuotaQuota = $map['SiteMonitorOperatorQuotaQuota'];
        }
        if (isset($map['SiteMonitorQuotaTaskUsed'])) {
            $model->siteMonitorQuotaTaskUsed = $map['SiteMonitorQuotaTaskUsed'];
        }
        if (isset($map['SiteMonitorTaskQuota'])) {
            $model->siteMonitorTaskQuota = $map['SiteMonitorTaskQuota'];
        }
        if (isset($map['SiteMonitorVersion'])) {
            $model->siteMonitorVersion = $map['SiteMonitorVersion'];
        }

        return $model;
    }
}
