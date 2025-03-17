<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption\logConfigDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption\traceDetails;
use AlibabaCloud\Tea\Model;

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
        'disableHttp2Alpn' => 'DisableHttp2Alpn',
        'enableHardwareAcceleration' => 'EnableHardwareAcceleration',
        'enableWaf' => 'EnableWaf',
        'logConfigDetails' => 'LogConfigDetails',
        'traceDetails' => 'TraceDetails',
    ];

    public function validate() {}

    public function toMap()
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
            $res['LogConfigDetails'] = null !== $this->logConfigDetails ? $this->logConfigDetails->toMap() : null;
        }
        if (null !== $this->traceDetails) {
            $res['TraceDetails'] = null !== $this->traceDetails ? $this->traceDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayOption
     */
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
