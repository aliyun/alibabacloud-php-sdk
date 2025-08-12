<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $secondMonitor;

    /**
     * @var int
     */
    public $siteMonitorIdcQuota;

    /**
     * @var int
     */
    public $siteMonitorOperatorQuotaQuota;

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
    protected $_name = [
        'secondMonitor' => 'SecondMonitor',
        'siteMonitorIdcQuota' => 'SiteMonitorIdcQuota',
        'siteMonitorOperatorQuotaQuota' => 'SiteMonitorOperatorQuotaQuota',
        'siteMonitorQuotaTaskUsed' => 'SiteMonitorQuotaTaskUsed',
        'siteMonitorTaskQuota' => 'SiteMonitorTaskQuota',
        'siteMonitorVersion' => 'SiteMonitorVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
