<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\api;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\customMonitor;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\enterpriseQuota;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\eventMonitor;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\logMonitor;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\phone;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorBrowser;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorEcsProbe;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorMobile;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorOperatorProbe;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorTask;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\SMS;

class resourceQuota extends Model
{
    /**
     * @var api
     */
    public $api;

    /**
     * @var customMonitor
     */
    public $customMonitor;

    /**
     * @var enterpriseQuota
     */
    public $enterpriseQuota;

    /**
     * @var eventMonitor
     */
    public $eventMonitor;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var logMonitor
     */
    public $logMonitor;

    /**
     * @var phone
     */
    public $phone;

    /**
     * @var SMS
     */
    public $SMS;

    /**
     * @var siteMonitorBrowser
     */
    public $siteMonitorBrowser;

    /**
     * @var siteMonitorEcsProbe
     */
    public $siteMonitorEcsProbe;

    /**
     * @var siteMonitorMobile
     */
    public $siteMonitorMobile;

    /**
     * @var siteMonitorOperatorProbe
     */
    public $siteMonitorOperatorProbe;

    /**
     * @var siteMonitorTask
     */
    public $siteMonitorTask;

    /**
     * @var string
     */
    public $suitInfo;
    protected $_name = [
        'api' => 'Api',
        'customMonitor' => 'CustomMonitor',
        'enterpriseQuota' => 'EnterpriseQuota',
        'eventMonitor' => 'EventMonitor',
        'expireTime' => 'ExpireTime',
        'instanceId' => 'InstanceId',
        'logMonitor' => 'LogMonitor',
        'phone' => 'Phone',
        'SMS' => 'SMS',
        'siteMonitorBrowser' => 'SiteMonitorBrowser',
        'siteMonitorEcsProbe' => 'SiteMonitorEcsProbe',
        'siteMonitorMobile' => 'SiteMonitorMobile',
        'siteMonitorOperatorProbe' => 'SiteMonitorOperatorProbe',
        'siteMonitorTask' => 'SiteMonitorTask',
        'suitInfo' => 'SuitInfo',
    ];

    public function validate()
    {
        if (null !== $this->api) {
            $this->api->validate();
        }
        if (null !== $this->customMonitor) {
            $this->customMonitor->validate();
        }
        if (null !== $this->enterpriseQuota) {
            $this->enterpriseQuota->validate();
        }
        if (null !== $this->eventMonitor) {
            $this->eventMonitor->validate();
        }
        if (null !== $this->logMonitor) {
            $this->logMonitor->validate();
        }
        if (null !== $this->phone) {
            $this->phone->validate();
        }
        if (null !== $this->SMS) {
            $this->SMS->validate();
        }
        if (null !== $this->siteMonitorBrowser) {
            $this->siteMonitorBrowser->validate();
        }
        if (null !== $this->siteMonitorEcsProbe) {
            $this->siteMonitorEcsProbe->validate();
        }
        if (null !== $this->siteMonitorMobile) {
            $this->siteMonitorMobile->validate();
        }
        if (null !== $this->siteMonitorOperatorProbe) {
            $this->siteMonitorOperatorProbe->validate();
        }
        if (null !== $this->siteMonitorTask) {
            $this->siteMonitorTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = null !== $this->api ? $this->api->toArray($noStream) : $this->api;
        }

        if (null !== $this->customMonitor) {
            $res['CustomMonitor'] = null !== $this->customMonitor ? $this->customMonitor->toArray($noStream) : $this->customMonitor;
        }

        if (null !== $this->enterpriseQuota) {
            $res['EnterpriseQuota'] = null !== $this->enterpriseQuota ? $this->enterpriseQuota->toArray($noStream) : $this->enterpriseQuota;
        }

        if (null !== $this->eventMonitor) {
            $res['EventMonitor'] = null !== $this->eventMonitor ? $this->eventMonitor->toArray($noStream) : $this->eventMonitor;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logMonitor) {
            $res['LogMonitor'] = null !== $this->logMonitor ? $this->logMonitor->toArray($noStream) : $this->logMonitor;
        }

        if (null !== $this->phone) {
            $res['Phone'] = null !== $this->phone ? $this->phone->toArray($noStream) : $this->phone;
        }

        if (null !== $this->SMS) {
            $res['SMS'] = null !== $this->SMS ? $this->SMS->toArray($noStream) : $this->SMS;
        }

        if (null !== $this->siteMonitorBrowser) {
            $res['SiteMonitorBrowser'] = null !== $this->siteMonitorBrowser ? $this->siteMonitorBrowser->toArray($noStream) : $this->siteMonitorBrowser;
        }

        if (null !== $this->siteMonitorEcsProbe) {
            $res['SiteMonitorEcsProbe'] = null !== $this->siteMonitorEcsProbe ? $this->siteMonitorEcsProbe->toArray($noStream) : $this->siteMonitorEcsProbe;
        }

        if (null !== $this->siteMonitorMobile) {
            $res['SiteMonitorMobile'] = null !== $this->siteMonitorMobile ? $this->siteMonitorMobile->toArray($noStream) : $this->siteMonitorMobile;
        }

        if (null !== $this->siteMonitorOperatorProbe) {
            $res['SiteMonitorOperatorProbe'] = null !== $this->siteMonitorOperatorProbe ? $this->siteMonitorOperatorProbe->toArray($noStream) : $this->siteMonitorOperatorProbe;
        }

        if (null !== $this->siteMonitorTask) {
            $res['SiteMonitorTask'] = null !== $this->siteMonitorTask ? $this->siteMonitorTask->toArray($noStream) : $this->siteMonitorTask;
        }

        if (null !== $this->suitInfo) {
            $res['SuitInfo'] = $this->suitInfo;
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
        if (isset($map['Api'])) {
            $model->api = api::fromMap($map['Api']);
        }

        if (isset($map['CustomMonitor'])) {
            $model->customMonitor = customMonitor::fromMap($map['CustomMonitor']);
        }

        if (isset($map['EnterpriseQuota'])) {
            $model->enterpriseQuota = enterpriseQuota::fromMap($map['EnterpriseQuota']);
        }

        if (isset($map['EventMonitor'])) {
            $model->eventMonitor = eventMonitor::fromMap($map['EventMonitor']);
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LogMonitor'])) {
            $model->logMonitor = logMonitor::fromMap($map['LogMonitor']);
        }

        if (isset($map['Phone'])) {
            $model->phone = phone::fromMap($map['Phone']);
        }

        if (isset($map['SMS'])) {
            $model->SMS = SMS::fromMap($map['SMS']);
        }

        if (isset($map['SiteMonitorBrowser'])) {
            $model->siteMonitorBrowser = siteMonitorBrowser::fromMap($map['SiteMonitorBrowser']);
        }

        if (isset($map['SiteMonitorEcsProbe'])) {
            $model->siteMonitorEcsProbe = siteMonitorEcsProbe::fromMap($map['SiteMonitorEcsProbe']);
        }

        if (isset($map['SiteMonitorMobile'])) {
            $model->siteMonitorMobile = siteMonitorMobile::fromMap($map['SiteMonitorMobile']);
        }

        if (isset($map['SiteMonitorOperatorProbe'])) {
            $model->siteMonitorOperatorProbe = siteMonitorOperatorProbe::fromMap($map['SiteMonitorOperatorProbe']);
        }

        if (isset($map['SiteMonitorTask'])) {
            $model->siteMonitorTask = siteMonitorTask::fromMap($map['SiteMonitorTask']);
        }

        if (isset($map['SuitInfo'])) {
            $model->suitInfo = $map['SuitInfo'];
        }

        return $model;
    }
}
