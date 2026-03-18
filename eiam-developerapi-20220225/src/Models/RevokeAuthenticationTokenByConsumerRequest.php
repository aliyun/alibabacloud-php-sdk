<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class RevokeAuthenticationTokenByConsumerRequest extends Model
{
    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var string
     */
    public $credentialProviderIdentifier;
    protected $_name = [
        'consumerId' => 'consumerId',
        'credentialProviderIdentifier' => 'credentialProviderIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->credentialProviderIdentifier) {
            $res['credentialProviderIdentifier'] = $this->credentialProviderIdentifier;
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
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['credentialProviderIdentifier'])) {
            $model->credentialProviderIdentifier = $map['credentialProviderIdentifier'];
        }

        return $model;
    }
}
