<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class SaveCdnDomainConfigRequest extends Model
{
    /**
     * @example {"authType":"type_a", "authKey":"hkpyytgrnf", "authDelta":1800}
     *
     * @var string
     */
    public $authConfig;

    /**
     * @example {"allowOrigin":"https://*.example.com", "accessOriginControl": true}
     *
     * @var string
     */
    public $corsConfig;

    /**
     * @example {"type":"white", "ipList":"192.168.2.0/24"}
     *
     * @var string
     */
    public $ipConfig;

    /**
     * @example {"type":"white", "referList":"example.com", "allowEmpty":"off", "disableAst":"off"}
     *
     * @var string
     */
    public $refererConfig;

    /**
     * @example mp-03c11beb-****-4d02-bb40-65a7ad224f4d
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example UNIULEH***
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example FILE
     *
     * @var string
     */
    public $type;

    /**
     * @example {"type":"white", "uaList":"*IE*|*firefox*"}
     *
     * @var string
     */
    public $uaConfig;
    protected $_name = [
        'authConfig'    => 'AuthConfig',
        'corsConfig'    => 'CorsConfig',
        'ipConfig'      => 'IpConfig',
        'refererConfig' => 'RefererConfig',
        'spaceId'       => 'SpaceId',
        'tenantId'      => 'TenantId',
        'type'          => 'Type',
        'uaConfig'      => 'UaConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfig) {
            $res['AuthConfig'] = $this->authConfig;
        }
        if (null !== $this->corsConfig) {
            $res['CorsConfig'] = $this->corsConfig;
        }
        if (null !== $this->ipConfig) {
            $res['IpConfig'] = $this->ipConfig;
        }
        if (null !== $this->refererConfig) {
            $res['RefererConfig'] = $this->refererConfig;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uaConfig) {
            $res['UaConfig'] = $this->uaConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveCdnDomainConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthConfig'])) {
            $model->authConfig = $map['AuthConfig'];
        }
        if (isset($map['CorsConfig'])) {
            $model->corsConfig = $map['CorsConfig'];
        }
        if (isset($map['IpConfig'])) {
            $model->ipConfig = $map['IpConfig'];
        }
        if (isset($map['RefererConfig'])) {
            $model->refererConfig = $map['RefererConfig'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UaConfig'])) {
            $model->uaConfig = $map['UaConfig'];
        }

        return $model;
    }
}
