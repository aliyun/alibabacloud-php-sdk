<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\ListListenersResponseBody\listeners\logConfig\accessLogTracingConfig;

class logConfig extends Model
{
    /**
     * @var bool
     */
    public $accessLogRecordCustomizedHeadersEnabled;

    /**
     * @var accessLogTracingConfig
     */
    public $accessLogTracingConfig;
    protected $_name = [
        'accessLogRecordCustomizedHeadersEnabled' => 'AccessLogRecordCustomizedHeadersEnabled',
        'accessLogTracingConfig' => 'AccessLogTracingConfig',
    ];

    public function validate()
    {
        if (null !== $this->accessLogTracingConfig) {
            $this->accessLogTracingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLogRecordCustomizedHeadersEnabled) {
            $res['AccessLogRecordCustomizedHeadersEnabled'] = $this->accessLogRecordCustomizedHeadersEnabled;
        }

        if (null !== $this->accessLogTracingConfig) {
            $res['AccessLogTracingConfig'] = null !== $this->accessLogTracingConfig ? $this->accessLogTracingConfig->toArray($noStream) : $this->accessLogTracingConfig;
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
        if (isset($map['AccessLogRecordCustomizedHeadersEnabled'])) {
            $model->accessLogRecordCustomizedHeadersEnabled = $map['AccessLogRecordCustomizedHeadersEnabled'];
        }

        if (isset($map['AccessLogTracingConfig'])) {
            $model->accessLogTracingConfig = accessLogTracingConfig::fromMap($map['AccessLogTracingConfig']);
        }

        return $model;
    }
}
