<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\logConfig;

use AlibabaCloud\Tea\Model;

class accessLogTracingConfig extends Model
{
    /**
     * @description Indicates whether Xtrace is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > You can set this parameter to **true** only if the AccessLogEnabled parameter is set to true.
     * @example true
     *
     * @var bool
     */
    public $tracingEnabled;

    /**
     * @description The sampling rate of Xtrace. Valid values: 1 to 10000.
     *
     * > If **TracingEnabled** is set to **true**, this parameter is valid.
     * @example 100
     *
     * @var int
     */
    public $tracingSample;

    /**
     * @description The Xtrace type. Supported Xtrace type: **Zipkin**.
     *
     * > If **TracingEnabled** is set to **true**, this parameter is valid.
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
