<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateListenerLogConfigRequest;

use AlibabaCloud\Tea\Model;

class accessLogTracingConfig extends Model
{
    /**
     * @description Specifies whether to enable the Xtrace feature. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * > You can set this parameter to **true** only if the access log feature is enabled by specifying **AccessLogEnabled**.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $tracingEnabled;

    /**
     * @description The sampling rate of the Xtrace feature.
     *
     * Valid values: **1 to 10000**.
     *
     * > This parameter takes effect only if you set **TracingEnabled** to **true**.
     * @example 100
     *
     * @var int
     */
    public $tracingSample;

    /**
     * @description The type of Xtrace. Set the value to **Zipkin**.
     *
     * > This parameter takes effect only if you set **TracingEnabled** to **true**.
     * @example Zipkin
     *
     * @var string
     */
    public $tracingType;
    protected $_name = [
        'tracingEnabled' => 'TracingEnabled',
        'tracingSample'  => 'TracingSample',
        'tracingType'    => 'TracingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tracingEnabled) {
            $res['TracingEnabled'] = $this->tracingEnabled;
        }
        if (null !== $this->tracingSample) {
            $res['TracingSample'] = $this->tracingSample;
        }
        if (null !== $this->tracingType) {
            $res['TracingType'] = $this->tracingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessLogTracingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TracingEnabled'])) {
            $model->tracingEnabled = $map['TracingEnabled'];
        }
        if (isset($map['TracingSample'])) {
            $model->tracingSample = $map['TracingSample'];
        }
        if (isset($map['TracingType'])) {
            $model->tracingType = $map['TracingType'];
        }

        return $model;
    }
}
