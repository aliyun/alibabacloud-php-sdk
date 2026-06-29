<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class CreateTokenPlanInviteLinkRequest extends Model
{
    /**
     * @var string
     */
    public $expireType;

    /**
     * @var string
     */
    public $ssoSource;
    protected $_name = [
        'expireType' => 'ExpireType',
        'ssoSource' => 'SsoSource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireType) {
            $res['ExpireType'] = $this->expireType;
        }

        if (null !== $this->ssoSource) {
            $res['SsoSource'] = $this->ssoSource;
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
        if (isset($map['ExpireType'])) {
            $model->expireType = $map['ExpireType'];
        }

        if (isset($map['SsoSource'])) {
            $model->ssoSource = $map['SsoSource'];
        }

        return $model;
    }
}
