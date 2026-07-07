<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20210602\Models\ListSkillAuthedIdentitiesResponseBody;

use AlibabaCloud\Dara\Model;

class identities extends Model
{
    /**
     * @var bool
     */
    public $autoInstall;

    /**
     * @var string
     */
    public $identityId;
    protected $_name = [
        'autoInstall' => 'AutoInstall',
        'identityId' => 'IdentityId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }

        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
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
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }

        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }

        return $model;
    }
}
