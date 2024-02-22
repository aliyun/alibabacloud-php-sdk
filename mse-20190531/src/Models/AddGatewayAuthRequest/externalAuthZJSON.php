<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayAuthRequest;

use AlibabaCloud\Tea\Model;

class externalAuthZJSON extends Model
{
    /**
     * @description The header that can be carried in an authentication request.
     *
     * @var string[]
     */
    public $allowRequestHeaders;

    /**
     * @description The header that can be retained in an authentication response.
     *
     * @var string[]
     */
    public $allowUpstreamHeaders;

    /**
     * @example 4000000
     *
     * @var int
     */
    public $bodyMaxBytes;

    /**
     * @description Specifies whether the gateway allows a client request when the authentication server is unavailable. If a connection to the authentication server fails to be established or a 5xx error code is returned, the authentication server is unavailable.
     *
     * @example true
     *
     * @var bool
     */
    public $isRestrict;

    /**
     * @description The path of the authentication API provided by the authentication service. The path supports the prefix match method.
     *
     * @example /auth
     *
     * @var string
     */
    public $prefixPath;

    /**
     * @description The ID of the service.
     *
     * @example 1
     *
     * @var int
     */
    public $serviceId;

    /**
     * @description The timeout period. Unit: seconds.
     *
     * @example 100
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The header that stores a token in an authentication request. In most cases, a token is stored in the Authorization or Cookie header.
     *
     * @example Authorization
     *
     * @var string
     */
    public $tokenKey;

    /**
     * @example true
     *
     * @var bool
     */
    public $withRequestBody;
    protected $_name = [
        'allowRequestHeaders'  => 'AllowRequestHeaders',
        'allowUpstreamHeaders' => 'AllowUpstreamHeaders',
        'bodyMaxBytes'         => 'BodyMaxBytes',
        'isRestrict'           => 'IsRestrict',
        'prefixPath'           => 'PrefixPath',
        'serviceId'            => 'ServiceId',
        'timeout'              => 'Timeout',
        'tokenKey'             => 'TokenKey',
        'withRequestBody'      => 'WithRequestBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowRequestHeaders) {
            $res['AllowRequestHeaders'] = $this->allowRequestHeaders;
        }
        if (null !== $this->allowUpstreamHeaders) {
            $res['AllowUpstreamHeaders'] = $this->allowUpstreamHeaders;
        }
        if (null !== $this->bodyMaxBytes) {
            $res['BodyMaxBytes'] = $this->bodyMaxBytes;
        }
        if (null !== $this->isRestrict) {
            $res['IsRestrict'] = $this->isRestrict;
        }
        if (null !== $this->prefixPath) {
            $res['PrefixPath'] = $this->prefixPath;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->tokenKey) {
            $res['TokenKey'] = $this->tokenKey;
        }
        if (null !== $this->withRequestBody) {
            $res['WithRequestBody'] = $this->withRequestBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalAuthZJSON
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowRequestHeaders'])) {
            if (!empty($map['AllowRequestHeaders'])) {
                $model->allowRequestHeaders = $map['AllowRequestHeaders'];
            }
        }
        if (isset($map['AllowUpstreamHeaders'])) {
            if (!empty($map['AllowUpstreamHeaders'])) {
                $model->allowUpstreamHeaders = $map['AllowUpstreamHeaders'];
            }
        }
        if (isset($map['BodyMaxBytes'])) {
            $model->bodyMaxBytes = $map['BodyMaxBytes'];
        }
        if (isset($map['IsRestrict'])) {
            $model->isRestrict = $map['IsRestrict'];
        }
        if (isset($map['PrefixPath'])) {
            $model->prefixPath = $map['PrefixPath'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['TokenKey'])) {
            $model->tokenKey = $map['TokenKey'];
        }
        if (isset($map['WithRequestBody'])) {
            $model->withRequestBody = $map['WithRequestBody'];
        }

        return $model;
    }
}
