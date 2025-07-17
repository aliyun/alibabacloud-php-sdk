<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetTraceConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Whether to Enable Tracing:
     * true: Enabled
     * false: Disabled
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description Sampling Rate
     *
     * @example 50
     *
     * @var int
     */
    public $sampleRatio;

    /**
     * @description Service ID, present when the tracing type is SKYWALKING
     *
     * @example ss-co370icmjeu****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description 服务端口，链路追踪类型为SKYWALKING时存在该参数
     *
     * @example 8090
     *
     * @var string
     */
    public $servicePort;

    /**
     * @description Tracing Type:
     * - XTRACE
     * - SKYWALKING
     * - OPENTELEMETRY
     * - OTSKYWALKING
     *
     * @example SKYWALKING
     *
     * @var string
     */
    public $traceType;
    protected $_name = [
        'enable' => 'enable',
        'sampleRatio' => 'sampleRatio',
        'serviceId' => 'serviceId',
        'servicePort' => 'servicePort',
        'traceType' => 'traceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->sampleRatio) {
            $res['sampleRatio'] = $this->sampleRatio;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->servicePort) {
            $res['servicePort'] = $this->servicePort;
        }
        if (null !== $this->traceType) {
            $res['traceType'] = $this->traceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['sampleRatio'])) {
            $model->sampleRatio = $map['sampleRatio'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['servicePort'])) {
            $model->servicePort = $map['servicePort'];
        }
        if (isset($map['traceType'])) {
            $model->traceType = $map['traceType'];
        }

        return $model;
    }
}
