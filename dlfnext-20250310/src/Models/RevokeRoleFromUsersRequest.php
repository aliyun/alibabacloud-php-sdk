<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class RevokeRoleFromUsersRequest extends Model
{
    /**
     * @var string
     */
    public $rolePrincipal;

    /**
     * @var string[]
     */
    public $userPrincipals;
    protected $_name = [
        'rolePrincipal' => 'rolePrincipal',
        'userPrincipals' => 'userPrincipals',
    ];

    public function validate()
    {
        if (\is_array($this->userPrincipals)) {
            Model::validateArray($this->userPrincipals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rolePrincipal) {
            $res['rolePrincipal'] = $this->rolePrincipal;
        }

        if (null !== $this->userPrincipals) {
            if (\is_array($this->userPrincipals)) {
                $res['userPrincipals'] = [];
                $n1 = 0;
                foreach ($this->userPrincipals as $item1) {
                    $res['userPrincipals'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['rolePrincipal'])) {
            $model->rolePrincipal = $map['rolePrincipal'];
        }

        if (isset($map['userPrincipals'])) {
            if (!empty($map['userPrincipals'])) {
                $model->userPrincipals = [];
                $n1 = 0;
                foreach ($map['userPrincipals'] as $item1) {
                    $model->userPrincipals[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
