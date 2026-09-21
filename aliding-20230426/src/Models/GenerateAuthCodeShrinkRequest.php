<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GenerateAuthCodeShrinkRequest extends Model
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
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $validRedirectUri;
    protected $_name = [
        'bucAppName' => 'BucAppName',
        'ssoTicket' => 'SsoTicket',
        'tenantContextShrink' => 'TenantContext',
        'validRedirectUri' => 'ValidRedirectUri',
    ];

    public function validate()
    {
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

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
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
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['ValidRedirectUri'])) {
            $model->validRedirectUri = $map['ValidRedirectUri'];
        }

        return $model;
    }
}
