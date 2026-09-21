<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GenerateAuthCodeRequest\tenantContext;

class GenerateAuthCodeRequest extends Model
{
    /**
     * @var string
     */
    public $bucAppName;

    /**
     * @var string
     */
    public $ssoTicket;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var string
     */
    public $validRedirectUri;
    protected $_name = [
        'bucAppName' => 'BucAppName',
        'ssoTicket' => 'SsoTicket',
        'tenantContext' => 'TenantContext',
        'validRedirectUri' => 'ValidRedirectUri',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucAppName) {
            $res['BucAppName'] = $this->bucAppName;
        }

        if (null !== $this->ssoTicket) {
            $res['SsoTicket'] = $this->ssoTicket;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->validRedirectUri) {
            $res['ValidRedirectUri'] = $this->validRedirectUri;
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
        if (isset($map['BucAppName'])) {
            $model->bucAppName = $map['BucAppName'];
        }

        if (isset($map['SsoTicket'])) {
            $model->ssoTicket = $map['SsoTicket'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['ValidRedirectUri'])) {
            $model->validRedirectUri = $map['ValidRedirectUri'];
        }

        return $model;
    }
}
