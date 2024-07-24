<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\commonSetting\customHost;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\commonSetting\customPrometheusSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\commonSetting\customVPCSetting;
use AlibabaCloud\Tea\Model;

class commonSetting extends Model
{
    /**
     * @description The custom host.
     *
     * @var customHost
     */
    public $customHost;

    /**
     * @description The reserved parameters.
     *
     * @var customPrometheusSetting
     */
    public $customPrometheusSetting;

    /**
     * @description User VPC information. If the dial-up is to the Alibaba Cloud intranet address, you need to configure the VPC information.
     *
     * @var customVPCSetting
     */
    public $customVPCSetting;

    /**
     * @description The IP version. Valid values:
     *
     *   0: A version is automatically selected.
     *   1: IPv4
     *   2: IPv6
     *
     * @example 0
     *
     * @var int
     */
    public $ipType;

    /**
     * @description Whether to enable tracing.
     *
     * @example true
     *
     * @var bool
     */
    public $isOpenTrace;

    /**
     * @description Specifies whether to evenly distribute monitoring samples. Valid values:
     *
     *   0: No
     *   1: Yes
     *
     * @example 0
     *
     * @var int
     */
    public $monitorSamples;

    /**
     * @description Tracing client type:
     *
     * - 2: Jaeger
     * @example 1
     *
     * @var int
     */
    public $traceClientType;

    /**
     * @description Tracing data reporting region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $xtraceRegion;
    protected $_name = [
        'customHost'              => 'CustomHost',
        'customPrometheusSetting' => 'CustomPrometheusSetting',
        'customVPCSetting'        => 'CustomVPCSetting',
        'ipType'                  => 'IpType',
        'isOpenTrace'             => 'IsOpenTrace',
        'monitorSamples'          => 'MonitorSamples',
        'traceClientType'         => 'TraceClientType',
        'xtraceRegion'            => 'XtraceRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customHost) {
            $res['CustomHost'] = null !== $this->customHost ? $this->customHost->toMap() : null;
        }
        if (null !== $this->customPrometheusSetting) {
            $res['CustomPrometheusSetting'] = null !== $this->customPrometheusSetting ? $this->customPrometheusSetting->toMap() : null;
        }
        if (null !== $this->customVPCSetting) {
            $res['CustomVPCSetting'] = null !== $this->customVPCSetting ? $this->customVPCSetting->toMap() : null;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->isOpenTrace) {
            $res['IsOpenTrace'] = $this->isOpenTrace;
        }
        if (null !== $this->monitorSamples) {
            $res['MonitorSamples'] = $this->monitorSamples;
        }
        if (null !== $this->traceClientType) {
            $res['TraceClientType'] = $this->traceClientType;
        }
        if (null !== $this->xtraceRegion) {
            $res['XtraceRegion'] = $this->xtraceRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomHost'])) {
            $model->customHost = customHost::fromMap($map['CustomHost']);
        }
        if (isset($map['CustomPrometheusSetting'])) {
            $model->customPrometheusSetting = customPrometheusSetting::fromMap($map['CustomPrometheusSetting']);
        }
        if (isset($map['CustomVPCSetting'])) {
            $model->customVPCSetting = customVPCSetting::fromMap($map['CustomVPCSetting']);
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['IsOpenTrace'])) {
            $model->isOpenTrace = $map['IsOpenTrace'];
        }
        if (isset($map['MonitorSamples'])) {
            $model->monitorSamples = $map['MonitorSamples'];
        }
        if (isset($map['TraceClientType'])) {
            $model->traceClientType = $map['TraceClientType'];
        }
        if (isset($map['XtraceRegion'])) {
            $model->xtraceRegion = $map['XtraceRegion'];
        }

        return $model;
    }
}
