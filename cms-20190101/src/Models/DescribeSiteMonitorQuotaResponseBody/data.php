<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $siteMonitorOperatorQuotaQuota;

    /**
     * @var bool
     */
    public $secondMonitor;

    /**
     * @var int
     */
    public $siteMonitorQuotaTaskUsed;

    /**
     * @var int
     */
    public $siteMonitorTaskQuota;

    /**
     * @var string
     */
    public $siteMonitorVersion;

    /**
     * @var int
     */
    public $siteMonitorIdcQuota;
    protected $_name = [
        'siteMonitorOperatorQuotaQuota' => 'SiteMonitorOperatorQuotaQuota',
        'secondMonitor'                 => 'SecondMonitor',
        'siteMonitorQuotaTaskUsed'      => 'SiteMonitorQuotaTaskUsed',
        'siteMonitorTaskQuota'          => 'SiteMonitorTaskQuota',
        'siteMonitorVersion'            => 'SiteMonitorVersion',
        'siteMonitorIdcQuota'           => 'SiteMonitorIdcQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteMonitorOperatorQuotaQuota) {
            $res['SiteMonitorOperatorQuotaQuota'] = $this->siteMonitorOperatorQuotaQuota;
        }
        if (null !== $this->secondMonitor) {
            $res['SecondMonitor'] = $this->secondMonitor;
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
        if (null !== $this->siteMonitorIdcQuota) {
            $res['SiteMonitorIdcQuota'] = $this->siteMonitorIdcQuota;
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
        if (isset($map['SiteMonitorOperatorQuotaQuota'])) {
            $model->siteMonitorOperatorQuotaQuota = $map['SiteMonitorOperatorQuotaQuota'];
        }
        if (isset($map['SecondMonitor'])) {
            $model->secondMonitor = $map['SecondMonitor'];
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
        if (isset($map['SiteMonitorIdcQuota'])) {
            $model->siteMonitorIdcQuota = $map['SiteMonitorIdcQuota'];
        }

        return $model;
    }
}
