<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetCustomerConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $auditConfig;

    /**
     * @var string
     */
    public $downloadSwitch;

    /**
     * @var string
     */
    public $metricConfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appId' => 'AppId',
        'auditConfig' => 'AuditConfig',
        'downloadSwitch' => 'DownloadSwitch',
        'metricConfig' => 'MetricConfig',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->auditConfig) {
            $res['AuditConfig'] = $this->auditConfig;
        }

        if (null !== $this->downloadSwitch) {
            $res['DownloadSwitch'] = $this->downloadSwitch;
        }

        if (null !== $this->metricConfig) {
            $res['MetricConfig'] = $this->metricConfig;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AuditConfig'])) {
            $model->auditConfig = $map['AuditConfig'];
        }

        if (isset($map['DownloadSwitch'])) {
            $model->downloadSwitch = $map['DownloadSwitch'];
        }

        if (isset($map['MetricConfig'])) {
            $model->metricConfig = $map['MetricConfig'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
