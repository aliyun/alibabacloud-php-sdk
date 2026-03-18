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
     * @var string
     */
    public $scope;
    protected $_name = [
        'credentialProviderIdentifier' => 'credentialProviderIdentifier',
        'scope' => 'scope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialProviderIdentifier) {
            $res['credentialProviderIdentifier'] = $this->credentialProviderIdentifier;
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

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        return $model;
    }
}
