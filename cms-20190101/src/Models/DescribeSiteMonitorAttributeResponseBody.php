<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\metricRules;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

class DescribeSiteMonitorAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var metricRules
     */
    public $metricRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var siteMonitors
     */
    public $siteMonitors;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'metricRules' => 'MetricRules',
        'requestId' => 'RequestId',
        'siteMonitors' => 'SiteMonitors',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->metricRules) {
            $this->metricRules->validate();
        }
        if (null !== $this->siteMonitors) {
            $this->siteMonitors->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->metricRules) {
            $res['MetricRules'] = null !== $this->metricRules ? $this->metricRules->toArray($noStream) : $this->metricRules;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteMonitors) {
            $res['SiteMonitors'] = null !== $this->siteMonitors ? $this->siteMonitors->toArray($noStream) : $this->siteMonitors;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MetricRules'])) {
            $model->metricRules = metricRules::fromMap($map['MetricRules']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteMonitors'])) {
            $model->siteMonitors = siteMonitors::fromMap($map['SiteMonitors']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
