<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class FetchOAuthAuthenticationTokenRequest extends Model
{
    /**
     * @var string
     */
    public $credentialProviderIdentifier;

    /**
     * @var string[]
     */
    public $customParameters;

    /**
     * @var bool
     */
    public $forceAuthentication;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'credentialProviderIdentifier' => 'credentialProviderIdentifier',
        'customParameters' => 'customParameters',
        'forceAuthentication' => 'forceAuthentication',
        'scope' => 'scope',
    ];

    public function validate()
    {
        if (\is_array($this->customParameters)) {
            Model::validateArray($this->customParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialProviderIdentifier) {
            $res['credentialProviderIdentifier'] = $this->credentialProviderIdentifier;
        }

        if (null !== $this->customParameters) {
            if (\is_array($this->customParameters)) {
                $res['customParameters'] = [];
                foreach ($this->customParameters as $key1 => $value1) {
                    $res['customParameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->forceAuthentication) {
            $res['forceAuthentication'] = $this->forceAuthentication;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
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
        if (isset($map['credentialProviderIdentifier'])) {
            $model->credentialProviderIdentifier = $map['credentialProviderIdentifier'];
        }

        if (isset($map['customParameters'])) {
            if (!empty($map['customParameters'])) {
                $model->customParameters = [];
                foreach ($map['customParameters'] as $key1 => $value1) {
                    $model->customParameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['forceAuthentication'])) {
            $model->forceAuthentication = $map['forceAuthentication'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
