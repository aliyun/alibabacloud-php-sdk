<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class GenerateJwtAuthenticationTokenRequest extends Model
{
    /**
     * @var string[]
     */
    public $audiences;

    /**
     * @var string
     */
    public $credentialProviderIdentifier;

    /**
     * @var mixed[]
     */
    public $customClaims;

    /**
     * @var int
     */
    public $expiration;

    /**
     * @var bool
     */
    public $includeDerivedShortToken;

    /**
     * @var string
     */
    public $issuer;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'audiences' => 'audiences',
        'credentialProviderIdentifier' => 'credentialProviderIdentifier',
        'customClaims' => 'customClaims',
        'expiration' => 'expiration',
        'includeDerivedShortToken' => 'includeDerivedShortToken',
        'issuer' => 'issuer',
        'subject' => 'subject',
    ];

    public function validate()
    {
        if (\is_array($this->audiences)) {
            Model::validateArray($this->audiences);
        }
        if (\is_array($this->customClaims)) {
            Model::validateArray($this->customClaims);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audiences) {
            if (\is_array($this->audiences)) {
                $res['audiences'] = [];
                $n1 = 0;
                foreach ($this->audiences as $item1) {
                    $res['audiences'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->credentialProviderIdentifier) {
            $res['credentialProviderIdentifier'] = $this->credentialProviderIdentifier;
        }

        if (null !== $this->customClaims) {
            if (\is_array($this->customClaims)) {
                $res['customClaims'] = [];
                foreach ($this->customClaims as $key1 => $value1) {
                    $res['customClaims'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->expiration) {
            $res['expiration'] = $this->expiration;
        }

        if (null !== $this->includeDerivedShortToken) {
            $res['includeDerivedShortToken'] = $this->includeDerivedShortToken;
        }

        if (null !== $this->issuer) {
            $res['issuer'] = $this->issuer;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
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
        if (isset($map['audiences'])) {
            if (!empty($map['audiences'])) {
                $model->audiences = [];
                $n1 = 0;
                foreach ($map['audiences'] as $item1) {
                    $model->audiences[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['credentialProviderIdentifier'])) {
            $model->credentialProviderIdentifier = $map['credentialProviderIdentifier'];
        }

        if (isset($map['customClaims'])) {
            if (!empty($map['customClaims'])) {
                $model->customClaims = [];
                foreach ($map['customClaims'] as $key1 => $value1) {
                    $model->customClaims[$key1] = $value1;
                }
            }
        }

        if (isset($map['expiration'])) {
            $model->expiration = $map['expiration'];
        }

        if (isset($map['includeDerivedShortToken'])) {
            $model->includeDerivedShortToken = $map['includeDerivedShortToken'];
        }

        if (isset($map['issuer'])) {
            $model->issuer = $map['issuer'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
