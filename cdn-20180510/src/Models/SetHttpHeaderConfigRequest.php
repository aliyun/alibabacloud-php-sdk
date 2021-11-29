<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class SetHttpHeaderConfigRequest extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $headerKey;

    /**
     * @var string
     */
    public $headerValue;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'configId'      => 'ConfigId',
        'domainName'    => 'DomainName',
        'headerKey'     => 'HeaderKey',
        'headerValue'   => 'HeaderValue',
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->headerKey) {
            $res['HeaderKey'] = $this->headerKey;
        }
        if (null !== $this->headerValue) {
            $res['HeaderValue'] = $this->headerValue;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetHttpHeaderConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['HeaderKey'])) {
            $model->headerKey = $map['HeaderKey'];
        }
        if (isset($map['HeaderValue'])) {
            $model->headerValue = $map['HeaderValue'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
