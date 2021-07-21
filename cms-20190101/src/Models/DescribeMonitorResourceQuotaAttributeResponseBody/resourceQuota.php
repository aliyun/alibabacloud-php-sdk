<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\api;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\customMonitor;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\enterpriseQuota;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\eventMonitor;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\logMonitor;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\phone;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorEcsProbe;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorOperatorProbe;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\siteMonitorTask;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\SMS;
use AlibabaCloud\Tea\Model;

class resourceQuota extends Model
{
    /**
     * @var string
     */
    public $suitInfo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var siteMonitorEcsProbe
     */
    public $siteMonitorEcsProbe;

    /**
     * @var siteMonitorOperatorProbe
     */
    public $siteMonitorOperatorProbe;

    /**
     * @var siteMonitorTask
     */
    public $siteMonitorTask;

    /**
     * @var customMonitor
     */
    public $customMonitor;

    /**
     * @var eventMonitor
     */
    public $eventMonitor;

    /**
     * @var logMonitor
     */
    public $logMonitor;

    /**
     * @var api
     */
    public $api;

    /**
     * @var SMS
     */
    public $SMS;

    /**
     * @var phone
     */
    public $phone;

    /**
     * @var enterpriseQuota
     */
    public $enterpriseQuota;
    protected $_name = [
        'suitInfo'                 => 'SuitInfo',
        'instanceId'               => 'InstanceId',
        'expireTime'               => 'ExpireTime',
        'siteMonitorEcsProbe'      => 'SiteMonitorEcsProbe',
        'siteMonitorOperatorProbe' => 'SiteMonitorOperatorProbe',
        'siteMonitorTask'          => 'SiteMonitorTask',
        'customMonitor'            => 'CustomMonitor',
        'eventMonitor'             => 'EventMonitor',
        'logMonitor'               => 'LogMonitor',
        'api'                      => 'Api',
        'SMS'                      => 'SMS',
        'phone'                    => 'Phone',
        'enterpriseQuota'          => 'EnterpriseQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suitInfo) {
            $res['SuitInfo'] = $this->suitInfo;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->siteMonitorEcsProbe) {
            $res['SiteMonitorEcsProbe'] = null !== $this->siteMonitorEcsProbe ? $this->siteMonitorEcsProbe->toMap() : null;
        }
        if (null !== $this->siteMonitorOperatorProbe) {
            $res['SiteMonitorOperatorProbe'] = null !== $this->siteMonitorOperatorProbe ? $this->siteMonitorOperatorProbe->toMap() : null;
        }
        if (null !== $this->siteMonitorTask) {
            $res['SiteMonitorTask'] = null !== $this->siteMonitorTask ? $this->siteMonitorTask->toMap() : null;
        }
        if (null !== $this->customMonitor) {
            $res['CustomMonitor'] = null !== $this->customMonitor ? $this->customMonitor->toMap() : null;
        }
        if (null !== $this->eventMonitor) {
            $res['EventMonitor'] = null !== $this->eventMonitor ? $this->eventMonitor->toMap() : null;
        }
        if (null !== $this->logMonitor) {
            $res['LogMonitor'] = null !== $this->logMonitor ? $this->logMonitor->toMap() : null;
        }
        if (null !== $this->api) {
            $res['Api'] = null !== $this->api ? $this->api->toMap() : null;
        }
        if (null !== $this->SMS) {
            $res['SMS'] = null !== $this->SMS ? $this->SMS->toMap() : null;
        }
        if (null !== $this->phone) {
            $res['Phone'] = null !== $this->phone ? $this->phone->toMap() : null;
        }
        if (null !== $this->enterpriseQuota) {
            $res['EnterpriseQuota'] = null !== $this->enterpriseQuota ? $this->enterpriseQuota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceQuota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuitInfo'])) {
            $model->suitInfo = $map['SuitInfo'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['SiteMonitorEcsProbe'])) {
            $model->siteMonitorEcsProbe = siteMonitorEcsProbe::fromMap($map['SiteMonitorEcsProbe']);
        }
        if (isset($map['SiteMonitorOperatorProbe'])) {
            $model->siteMonitorOperatorProbe = siteMonitorOperatorProbe::fromMap($map['SiteMonitorOperatorProbe']);
        }
        if (isset($map['SiteMonitorTask'])) {
            $model->siteMonitorTask = siteMonitorTask::fromMap($map['SiteMonitorTask']);
        }
        if (isset($map['CustomMonitor'])) {
            $model->customMonitor = customMonitor::fromMap($map['CustomMonitor']);
        }
        if (isset($map['EventMonitor'])) {
            $model->eventMonitor = eventMonitor::fromMap($map['EventMonitor']);
        }
        if (isset($map['LogMonitor'])) {
            $model->logMonitor = logMonitor::fromMap($map['LogMonitor']);
        }
        if (isset($map['Api'])) {
            $model->api = api::fromMap($map['Api']);
        }
        if (isset($map['SMS'])) {
            $model->SMS = SMS::fromMap($map['SMS']);
        }
        if (isset($map['Phone'])) {
            $model->phone = phone::fromMap($map['Phone']);
        }
        if (isset($map['EnterpriseQuota'])) {
            $model->enterpriseQuota = enterpriseQuota::fromMap($map['EnterpriseQuota']);
        }

        return $model;
    }
}
