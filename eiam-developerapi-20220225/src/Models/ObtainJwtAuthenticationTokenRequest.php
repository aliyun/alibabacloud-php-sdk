<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;

class ObtainJwtAuthenticationTokenRequest extends Model
{
    /**
     * @var string
     */
    public $authenticationTokenId;

    /**
     * @var string
     */
    public $consumerId;
    protected $_name = [
        'authenticationTokenId' => 'authenticationTokenId',
        'consumerId' => 'consumerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authenticationTokenId) {
            $res['authenticationTokenId'] = $this->authenticationTokenId;
        }

        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
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
        if (isset($map['authenticationTokenId'])) {
            $model->authenticationTokenId = $map['authenticationTokenId'];
        }

        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        return $model;
    }
}
