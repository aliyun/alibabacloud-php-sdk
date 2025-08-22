<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\commonSetting\customHost;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\commonSetting\customPrometheusSetting;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\commonSetting\customVPCSetting;

class commonSetting extends Model
{
    /**
     * @var customHost
     */
    public $customHost;

    /**
     * @var customPrometheusSetting
     */
    public $customPrometheusSetting;

    /**
     * @var customVPCSetting
     */
    public $customVPCSetting;

    /**
     * @var int
     */
    public $ipType;

    /**
     * @var bool
     */
    public $isOpenTrace;

    /**
     * @var int
     */
    public $monitorSamples;

    /**
     * @var int
     */
    public $traceClientType;

    /**
     * @var string
     */
    public $xtraceRegion;
    protected $_name = [
        'customHost' => 'CustomHost',
        'customPrometheusSetting' => 'CustomPrometheusSetting',
        'customVPCSetting' => 'CustomVPCSetting',
        'ipType' => 'IpType',
        'isOpenTrace' => 'IsOpenTrace',
        'monitorSamples' => 'MonitorSamples',
        'traceClientType' => 'TraceClientType',
        'xtraceRegion' => 'XtraceRegion',
    ];

    public function validate()
    {
        if (null !== $this->customHost) {
            $this->customHost->validate();
        }
        if (null !== $this->customPrometheusSetting) {
            $this->customPrometheusSetting->validate();
        }
        if (null !== $this->customVPCSetting) {
            $this->customVPCSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customHost) {
            $res['CustomHost'] = null !== $this->customHost ? $this->customHost->toArray($noStream) : $this->customHost;
        }

        if (null !== $this->customPrometheusSetting) {
            $res['CustomPrometheusSetting'] = null !== $this->customPrometheusSetting ? $this->customPrometheusSetting->toArray($noStream) : $this->customPrometheusSetting;
        }

        if (null !== $this->customVPCSetting) {
            $res['CustomVPCSetting'] = null !== $this->customVPCSetting ? $this->customVPCSetting->toArray($noStream) : $this->customVPCSetting;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
