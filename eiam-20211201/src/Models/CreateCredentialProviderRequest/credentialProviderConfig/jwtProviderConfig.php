<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateCredentialProviderRequest\credentialProviderConfig;

use AlibabaCloud\Dara\Model;

class jwtProviderConfig extends Model
{
    /**
     * @var string[]
     */
    public $allowedTokenIssuers;

    /**
     * @var bool
     */
    public $derivedShortTokenEnabled;

    /**
     * @var int
     */
    public $expiration;

    /**
     * @var bool
     */
    public $expirationCleanupEnabled;
    protected $_name = [
        'allowedTokenIssuers' => 'AllowedTokenIssuers',
        'derivedShortTokenEnabled' => 'DerivedShortTokenEnabled',
        'expiration' => 'Expiration',
        'expirationCleanupEnabled' => 'ExpirationCleanupEnabled',
    ];

    public function validate()
    {
        if (\is_array($this->allowedTokenIssuers)) {
            Model::validateArray($this->allowedTokenIssuers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedTokenIssuers) {
            if (\is_array($this->allowedTokenIssuers)) {
                $res['AllowedTokenIssuers'] = [];
                $n1 = 0;
                foreach ($this->allowedTokenIssuers as $item1) {
                    $res['AllowedTokenIssuers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->derivedShortTokenEnabled) {
            $res['DerivedShortTokenEnabled'] = $this->derivedShortTokenEnabled;
        }

        if (null !== $this->expiration) {
            $res['Expiration'] = $this->expiration;
        }

        if (null !== $this->expirationCleanupEnabled) {
            $res['ExpirationCleanupEnabled'] = $this->expirationCleanupEnabled;
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
        if (isset($map['AllowedTokenIssuers'])) {
            if (!empty($map['AllowedTokenIssuers'])) {
                $model->allowedTokenIssuers = [];
                $n1 = 0;
                foreach ($map['AllowedTokenIssuers'] as $item1) {
                    $model->allowedTokenIssuers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DerivedShortTokenEnabled'])) {
            $model->derivedShortTokenEnabled = $map['DerivedShortTokenEnabled'];
        }

        if (isset($map['Expiration'])) {
            $model->expiration = $map['Expiration'];
        }

        if (isset($map['ExpirationCleanupEnabled'])) {
            $model->expirationCleanupEnabled = $map['ExpirationCleanupEnabled'];
        }

        return $model;
    }
}
