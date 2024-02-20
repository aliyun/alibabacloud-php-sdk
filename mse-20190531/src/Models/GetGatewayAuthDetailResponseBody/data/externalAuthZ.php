<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data\externalAuthZ\service;
use AlibabaCloud\Tea\Model;

class externalAuthZ extends Model
{
    /**
     * @var string[]
     */
    public $allowRequestHeaders;

    /**
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
     * @example true
     *
     * @var bool
     */
    public $isRestrict;

    /**
     * @example /auth
     *
     * @var string
     */
    public $prefixPath;

    /**
     * @var service
     */
    public $service;

    /**
     * @example 15300
     *
     * @var int
     */
    public $serviceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $timeout;

    /**
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
        'service'              => 'Service',
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
        if (null !== $this->service) {
            $res['Service'] = null !== $this->service ? $this->service->toMap() : null;
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
     * @return externalAuthZ
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
        if (isset($map['Service'])) {
            $model->service = service::fromMap($map['Service']);
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
