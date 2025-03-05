<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\logConfig\accessLogTracingConfig;
use AlibabaCloud\Tea\Model;

class logConfig extends Model
{
    /**
     * @description Indicates whether custom headers are recorded in the access log. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $accessLogRecordCustomizedHeadersEnabled;

    /**
     * @description The configuration of Xtrace. Xtrace is used to record requests sent to ALB.
     *
     * @var accessLogTracingConfig
     */
    public $accessLogTracingConfig;
    protected $_name = [
        'accessLogRecordCustomizedHeadersEnabled' => 'AccessLogRecordCustomizedHeadersEnabled',
        'accessLogTracingConfig'                  => 'AccessLogTracingConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogRecordCustomizedHeadersEnabled) {
            $res['AccessLogRecordCustomizedHeadersEnabled'] = $this->accessLogRecordCustomizedHeadersEnabled;
        }
        if (null !== $this->accessLogTracingConfig) {
            $res['AccessLogTracingConfig'] = null !== $this->accessLogTracingConfig ? $this->accessLogTracingConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogRecordCustomizedHeadersEnabled'])) {
            $model->accessLogRecordCustomizedHeadersEnabled = $map['AccessLogRecordCustomizedHeadersEnabled'];
        }
        if (isset($map['AccessLogTracingConfig'])) {
            $model->accessLogTracingConfig = accessLogTracingConfig::fromMap($map['AccessLogTracingConfig']);
        }

        return $model;
    }
}
