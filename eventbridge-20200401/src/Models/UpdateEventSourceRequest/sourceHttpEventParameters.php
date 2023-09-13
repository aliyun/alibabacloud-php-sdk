<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateEventSourceRequest;

use AlibabaCloud\Tea\Model;

class sourceHttpEventParameters extends Model
{
    /**
     * @description The CIDR blocks used for security settings. This parameter is required only if you set SecurityConfig to ip. You can enter CIDR blocks or IP addresses.
     *
     * @var string[]
     */
    public $ip;

    /**
     * @description The HTTP request method supported by the generated webhook URL. You can select multiple values. Valid values: GET POST PUT PATCH DELETE HEAD OPTIONS TRACE CONNECT
     *
     * @var string[]
     */
    public $method;

    /**
     * @description The security domain names. This parameter is required only if SecurityConfig is set to referer. You can enter domain names.
     *
     * @var string[]
     */
    public $referer;

    /**
     * @description The type of security settings. Valid values: none: No configuration is required. ip: CIDR blocks. referer: security domain names.
     *
     * @example none
     *
     * @var string
     */
    public $securityConfig;

    /**
     * @description The protocol type supported by the generated webhook URL. Valid values: HTTP HTTPS HTTP\&HTTPS
     *
     * @example HTTPS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'ip'             => 'Ip',
        'method'         => 'Method',
        'referer'        => 'Referer',
        'securityConfig' => 'SecurityConfig',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->referer) {
            $res['Referer'] = $this->referer;
        }
        if (null !== $this->securityConfig) {
            $res['SecurityConfig'] = $this->securityConfig;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceHttpEventParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            if (!empty($map['Ip'])) {
                $model->ip = $map['Ip'];
            }
        }
        if (isset($map['Method'])) {
            if (!empty($map['Method'])) {
                $model->method = $map['Method'];
            }
        }
        if (isset($map['Referer'])) {
            if (!empty($map['Referer'])) {
                $model->referer = $map['Referer'];
            }
        }
        if (isset($map['SecurityConfig'])) {
            $model->securityConfig = $map['SecurityConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
