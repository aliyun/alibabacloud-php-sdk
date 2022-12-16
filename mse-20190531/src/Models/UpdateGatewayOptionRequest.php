<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class UpdateGatewayOptionRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the gateway.
     *
     * @example 421
     *
     * @var int
     */
    public $gatewayId;

    /**
     * @description The detailed configurations of the gateway.
     *
     *   **TraceDetails**: the sampling description of Tracing Analysis. Content: TraceEnabled specifies whether to activate Tracing Analysis. Sample specifies the sampling rate of Tracing Analysis.
     *   **LogConfigDetails**: the description of Log Service. Content: LogEnabled specifies whether to activate Log Service. ProjectName specifies the Log Service project to which logs are delivered. LogStoreName specifies the name of the Logstore.
     *   **EnableHardwareAcceleration**: specifies whether to enable hardware acceleration.
     *   **DisableHttp2Alpn**: specifies whether to disable the HTTP/2 protocol.
     *   **EnableWaf**: specifies whether to activate Web Application Firewall (WAF).
     *
     * @var GatewayOption
     */
    public $gatewayOption;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-83b0ddb569434f82b9fe8e4c60c4****
     *
     * @var string
     */
    public $gatewayUniqueId;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'gatewayId'       => 'GatewayId',
        'gatewayOption'   => 'GatewayOption',
        'gatewayUniqueId' => 'GatewayUniqueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayOption) {
            $res['GatewayOption'] = null !== $this->gatewayOption ? $this->gatewayOption->toMap() : null;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGatewayOptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['GatewayOption'])) {
            $model->gatewayOption = GatewayOption::fromMap($map['GatewayOption']);
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }

        return $model;
    }
}
