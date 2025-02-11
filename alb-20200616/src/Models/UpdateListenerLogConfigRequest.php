<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigRequest\accessLogTracingConfig;

class UpdateListenerLogConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $accessLogRecordCustomizedHeadersEnabled;
    /**
     * @var accessLogTracingConfig
     */
    public $accessLogTracingConfig;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $listenerId;
    protected $_name = [
        'accessLogRecordCustomizedHeadersEnabled' => 'AccessLogRecordCustomizedHeadersEnabled',
        'accessLogTracingConfig'                  => 'AccessLogTracingConfig',
        'clientToken'                             => 'ClientToken',
        'dryRun'                                  => 'DryRun',
        'listenerId'                              => 'ListenerId',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        return $model;
    }
}
