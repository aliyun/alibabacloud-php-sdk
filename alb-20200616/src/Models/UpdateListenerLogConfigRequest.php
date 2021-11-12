<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigRequest\accessLogTracingConfig;
use AlibabaCloud\Tea\Model;

class UpdateListenerLogConfigRequest extends Model
{
    /**
     * @description 是否开启携带自定义Header
     *
     * @var bool
     */
    public $accessLogRecordCustomizedHeadersEnabled;

    /**
     * @description 访问日志xtrace字段相关的配置
     *
     * @var accessLogTracingConfig
     */
    public $accessLogTracingConfig;

    /**
     * @description 幂等标识
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description  是否只预检此次请求
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description 监听标识
     *
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

    /**
     * @param array $map
     *
     * @return UpdateListenerLogConfigRequest
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
