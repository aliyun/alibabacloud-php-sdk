<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption\logConfigDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption\traceDetails;

class GatewayOption extends Model
{
    /**
     * @var bool
     */
    public $disableHttp2Alpn;
    /**
     * @var bool
     */
    public $enableHardwareAcceleration;
    /**
     * @var bool
     */
    public $enableWaf;
    /**
     * @var logConfigDetails
     */
    public $logConfigDetails;
    /**
     * @var traceDetails
     */
    public $traceDetails;
    protected $_name = [
        'disableHttp2Alpn'           => 'DisableHttp2Alpn',
        'enableHardwareAcceleration' => 'EnableHardwareAcceleration',
        'enableWaf'                  => 'EnableWaf',
        'logConfigDetails'           => 'LogConfigDetails',
        'traceDetails'               => 'TraceDetails',
    ];

    public function validate()
    {
        if (null !== $this->logConfigDetails) {
            $this->logConfigDetails->validate();
        }
        if (null !== $this->traceDetails) {
            $this->traceDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableHttp2Alpn) {
            $res['DisableHttp2Alpn'] = $this->disableHttp2Alpn;
        }

        if (null !== $this->enableHardwareAcceleration) {
            $res['EnableHardwareAcceleration'] = $this->enableHardwareAcceleration;
        }

        if (null !== $this->enableWaf) {
            $res['EnableWaf'] = $this->enableWaf;
        }

        if (null !== $this->logConfigDetails) {
            $res['LogConfigDetails'] = null !== $this->logConfigDetails ? $this->logConfigDetails->toArray($noStream) : $this->logConfigDetails;
        }

        if (null !== $this->traceDetails) {
            $res['TraceDetails'] = null !== $this->traceDetails ? $this->traceDetails->toArray($noStream) : $this->traceDetails;
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
        if (isset($map['DisableHttp2Alpn'])) {
            $model->disableHttp2Alpn = $map['DisableHttp2Alpn'];
        }

        if (isset($map['EnableHardwareAcceleration'])) {
            $model->enableHardwareAcceleration = $map['EnableHardwareAcceleration'];
        }

        if (isset($map['EnableWaf'])) {
            $model->enableWaf = $map['EnableWaf'];
        }

        if (isset($map['LogConfigDetails'])) {
            $model->logConfigDetails = logConfigDetails::fromMap($map['LogConfigDetails']);
        }

        if (isset($map['TraceDetails'])) {
            $model->traceDetails = traceDetails::fromMap($map['TraceDetails']);
        }

        return $model;
    }
}
