<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationResourceResponseBody\authorizationResource;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetAuthorizationResourceResponseBody\authorizationResource\condition\credentialCondition;

class condition extends Model
{
    /**
     * @var credentialCondition
     */
    public $credentialCondition;
    protected $_name = [
        'credentialCondition' => 'CredentialCondition',
    ];

    public function validate()
    {
        if (null !== $this->credentialCondition) {
            $this->credentialCondition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialCondition) {
            $res['CredentialCondition'] = null !== $this->credentialCondition ? $this->credentialCondition->toArray($noStream) : $this->credentialCondition;
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
        if (isset($map['CredentialCondition'])) {
            $model->credentialCondition = credentialCondition::fromMap($map['CredentialCondition']);
        }

        return $model;
    }
}
