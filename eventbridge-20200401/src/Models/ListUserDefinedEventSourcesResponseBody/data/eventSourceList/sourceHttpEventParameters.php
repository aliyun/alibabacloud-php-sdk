<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListUserDefinedEventSourcesResponseBody\data\eventSourceList;

use AlibabaCloud\Tea\Model;

class sourceHttpEventParameters extends Model
{
    /**
     * @description The CIDR block that is used for security settings. This parameter is required only if SecurityConfig is set to ip. You can enter a CIDR block or an IP address.
     *
     * @var string[]
     */
    public $ip;

    /**
     * @description The HTTP request method that is supported by the generated webhook URL. You can select multiple values. Valid values:
     *
     *   GET
     *   POST
     *   PUT
     *   PATCH
     *   DELETE
     *   HEAD
     *   OPTIONS
     *   TRACE
     *   CONNECT
     *
     * @var string[]
     */
    public $method;

    /**
     * @description The Internet request URL.
     *
     * @var string[]
     */
    public $publicWebHookUrl;

    /**
     * @description The security domain name. This parameter is required only if SecurityConfig is set to referer. You can enter a domain name.
     *
     * @var string[]
     */
    public $referer;

    /**
     * @description The type of security settings. Valid values:
     *
     *   none: No configuration is required.
     *   ip: CIDR block.
     *   referer: security domain name.
     *
     * @example none
     *
     * @var string
     */
    public $securityConfig;

    /**
     * @description The protocol type that is supported by the generated webhook URL. Valid values:
     *
     *   HTTP
     *   HTTPS
     *   HTTP\\&HTTPS
     *
     * @example HTTPS
     *
     * @var string
     */
    public $type;

    /**
     * @description The internal request URL.
     *
     * @var string[]
     */
    public $vpcWebHookUrl;
    protected $_name = [
        'ip' => 'Ip',
        'method' => 'Method',
        'publicWebHookUrl' => 'PublicWebHookUrl',
        'referer' => 'Referer',
        'securityConfig' => 'SecurityConfig',
        'type' => 'Type',
        'vpcWebHookUrl' => 'VpcWebHookUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->publicWebHookUrl) {
            $res['PublicWebHookUrl'] = $this->publicWebHookUrl;
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
        if (null !== $this->vpcWebHookUrl) {
            $res['VpcWebHookUrl'] = $this->vpcWebHookUrl;
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
        if (isset($map['PublicWebHookUrl'])) {
            if (!empty($map['PublicWebHookUrl'])) {
                $model->publicWebHookUrl = $map['PublicWebHookUrl'];
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
        if (isset($map['VpcWebHookUrl'])) {
            if (!empty($map['VpcWebHookUrl'])) {
                $model->vpcWebHookUrl = $map['VpcWebHookUrl'];
            }
        }

        return $model;
    }
}
