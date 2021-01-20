<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\metricRules;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;
use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorAttributeResponseBody extends Model
{
    /**
     * @var metricRules
     */
    public $metricRules;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var siteMonitors
     */
    public $siteMonitors;
    protected $_name = [
        'metricRules'  => 'MetricRules',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'code'         => 'Code',
        'success'      => 'Success',
        'siteMonitors' => 'SiteMonitors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricRules) {
            $res['MetricRules'] = null !== $this->metricRules ? $this->metricRules->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->siteMonitors) {
            $res['SiteMonitors'] = null !== $this->siteMonitors ? $this->siteMonitors->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricRules'])) {
            $model->metricRules = metricRules::fromMap($map['MetricRules']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SiteMonitors'])) {
            $model->siteMonitors = siteMonitors::fromMap($map['SiteMonitors']);
        }

        return $model;
    }
}
