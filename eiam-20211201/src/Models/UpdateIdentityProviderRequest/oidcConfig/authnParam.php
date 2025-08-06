<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateIdentityProviderRequest\oidcConfig;

use AlibabaCloud\Dara\Model;

class authnParam extends Model
{
    /**
     * @var string
     */
    public $authnMethod;

    /**
     * @var string
     */
    public $clientSecret;
    protected $_name = [
        'authnMethod' => 'AuthnMethod',
        'clientSecret' => 'ClientSecret',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authnMethod) {
            $res['AuthnMethod'] = $this->authnMethod;
        }

        if (null !== $this->clientSecret) {
            $res['ClientSecret'] = $this->clientSecret;
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
        if (isset($map['AuthnMethod'])) {
            $model->authnMethod = $map['AuthnMethod'];
        }

        if (isset($map['ClientSecret'])) {
            $model->clientSecret = $map['ClientSecret'];
        }

        return $model;
    }
}
