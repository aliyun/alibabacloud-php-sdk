<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetOrganizationMemberResponseBody\member;

use AlibabaCloud\Dara\Model;

class identities extends Model
{
    /**
     * @var string
     */
    public $externUid;

    /**
     * @var string
     */
    public $provider;
    protected $_name = [
        'externUid' => 'externUid',
        'provider' => 'provider',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externUid) {
            $res['externUid'] = $this->externUid;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
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
        if (isset($map['externUid'])) {
            $model->externUid = $map['externUid'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        return $model;
    }
}
