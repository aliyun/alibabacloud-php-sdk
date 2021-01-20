<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\api;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota\customMonitor;
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
     * @var api
     */
    public $api;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var customMonitor
     */
    public $customMonitor;

    /**
     * @var eventMonitor
     */
    public $eventMonitor;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var siteMonitorTask
     */
    public $siteMonitorTask;

    /**
     * @var phone
     */
    public $phone;

    /**
     * @var string
     */
    public $suitInfo;

    /**
     * @var SMS
     */
    public $SMS;

    /**
     * @var logMonitor
     */
    public $logMonitor;

    /**
     * @var siteMonitorOperatorProbe
     */
    public $siteMonitorOperatorProbe;

    /**
     * @var siteMonitorEcsProbe
     */
    public $siteMonitorEcsProbe;
    protected $_name = [
        'api'                      => 'Api',
        'expireTime'               => 'ExpireTime',
        'customMonitor'            => 'CustomMonitor',
        'eventMonitor'             => 'EventMonitor',
        'instanceId'               => 'InstanceId',
        'siteMonitorTask'          => 'SiteMonitorTask',
        'phone'                    => 'Phone',
        'suitInfo'                 => 'SuitInfo',
        'SMS'                      => 'SMS',
        'logMonitor'               => 'LogMonitor',
        'siteMonitorOperatorProbe' => 'SiteMonitorOperatorProbe',
        'siteMonitorEcsProbe'      => 'SiteMonitorEcsProbe',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = null !== $this->api ? $this->api->toMap() : null;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->customMonitor) {
            $res['CustomMonitor'] = null !== $this->customMonitor ? $this->customMonitor->toMap() : null;
        }
        if (null !== $this->eventMonitor) {
            $res['EventMonitor'] = null !== $this->eventMonitor ? $this->eventMonitor->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->siteMonitorTask) {
            $res['SiteMonitorTask'] = null !== $this->siteMonitorTask ? $this->siteMonitorTask->toMap() : null;
        }
        if (null !== $this->phone) {
            $res['Phone'] = null !== $this->phone ? $this->phone->toMap() : null;
        }
        if (null !== $this->suitInfo) {
            $res['SuitInfo'] = $this->suitInfo;
        }
        if (null !== $this->SMS) {
            $res['SMS'] = null !== $this->SMS ? $this->SMS->toMap() : null;
        }
        if (null !== $this->logMonitor) {
            $res['LogMonitor'] = null !== $this->logMonitor ? $this->logMonitor->toMap() : null;
        }
        if (null !== $this->siteMonitorOperatorProbe) {
            $res['SiteMonitorOperatorProbe'] = null !== $this->siteMonitorOperatorProbe ? $this->siteMonitorOperatorProbe->toMap() : null;
        }
        if (null !== $this->siteMonitorEcsProbe) {
            $res['SiteMonitorEcsProbe'] = null !== $this->siteMonitorEcsProbe ? $this->siteMonitorEcsProbe->toMap() : null;
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
        if (isset($map['Api'])) {
            $model->api = api::fromMap($map['Api']);
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CustomMonitor'])) {
            $model->customMonitor = customMonitor::fromMap($map['CustomMonitor']);
        }
        if (isset($map['EventMonitor'])) {
            $model->eventMonitor = eventMonitor::fromMap($map['EventMonitor']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SiteMonitorTask'])) {
            $model->siteMonitorTask = siteMonitorTask::fromMap($map['SiteMonitorTask']);
        }
        if (isset($map['Phone'])) {
            $model->phone = phone::fromMap($map['Phone']);
        }
        if (isset($map['SuitInfo'])) {
            $model->suitInfo = $map['SuitInfo'];
        }
        if (isset($map['SMS'])) {
            $model->SMS = SMS::fromMap($map['SMS']);
        }
        if (isset($map['LogMonitor'])) {
            $model->logMonitor = logMonitor::fromMap($map['LogMonitor']);
        }
        if (isset($map['SiteMonitorOperatorProbe'])) {
            $model->siteMonitorOperatorProbe = siteMonitorOperatorProbe::fromMap($map['SiteMonitorOperatorProbe']);
        }
        if (isset($map['SiteMonitorEcsProbe'])) {
            $model->siteMonitorEcsProbe = siteMonitorEcsProbe::fromMap($map['SiteMonitorEcsProbe']);
        }

        return $model;
    }
}
