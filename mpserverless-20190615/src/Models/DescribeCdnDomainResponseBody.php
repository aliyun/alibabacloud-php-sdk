<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody\authConfig;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody\corsConfig;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody\ipConfig;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody\refererConfig;
use AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody\uaConfig;
use AlibabaCloud\Tea\Model;

class DescribeCdnDomainResponseBody extends Model
{
    /**
     * @var authConfig
     */
    public $authConfig;

    /**
     * @var corsConfig
     */
    public $corsConfig;

    /**
     * @example mp-65e6491b-****-4c2e-b202-7f0036eb2713.cdn.bspapp.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var ipConfig
     */
    public $ipConfig;

    /**
     * @var refererConfig
     */
    public $refererConfig;

    /**
     * @example E8A2FA95-6F70-****-971C-34C27485441D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example IN_SERVICE
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @example mp-65e6491b-****-4c2e-b202-7f0036eb2713
     *
     * @var string
     */
    public $spaceId;

    /**
     * @var uaConfig
     */
    public $uaConfig;
    protected $_name = [
        'authConfig'    => 'AuthConfig',
        'corsConfig'    => 'CorsConfig',
        'domainName'    => 'DomainName',
        'ipConfig'      => 'IpConfig',
        'refererConfig' => 'RefererConfig',
        'requestId'     => 'RequestId',
        'serviceStatus' => 'ServiceStatus',
        'spaceId'       => 'SpaceId',
        'uaConfig'      => 'UaConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['AuthConfig'] = null !== $this->authConfig ? $this->authConfig->toMap() : null;
        }
        if (null !== $this->corsConfig) {
            $res['CorsConfig'] = null !== $this->corsConfig ? $this->corsConfig->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ipConfig) {
            $res['IpConfig'] = null !== $this->ipConfig ? $this->ipConfig->toMap() : null;
        }
        if (null !== $this->refererConfig) {
            $res['RefererConfig'] = null !== $this->refererConfig ? $this->refererConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->uaConfig) {
            $res['UaConfig'] = null !== $this->uaConfig ? $this->uaConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthConfig'])) {
            $model->authConfig = authConfig::fromMap($map['AuthConfig']);
        }
        if (isset($map['CorsConfig'])) {
            $model->corsConfig = corsConfig::fromMap($map['CorsConfig']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IpConfig'])) {
            $model->ipConfig = ipConfig::fromMap($map['IpConfig']);
        }
        if (isset($map['RefererConfig'])) {
            $model->refererConfig = refererConfig::fromMap($map['RefererConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['UaConfig'])) {
            $model->uaConfig = uaConfig::fromMap($map['UaConfig']);
        }

        return $model;
    }
}
