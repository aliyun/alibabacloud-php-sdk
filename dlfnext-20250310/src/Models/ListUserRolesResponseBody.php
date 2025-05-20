<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class ListUserRolesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextPageToken;

    /**
     * @var Role[]
     */
    public $roles;
    protected $_name = [
        'nextPageToken' => 'nextPageToken',
        'roles' => 'roles',
    ];

    public function validate()
    {
        if (\is_array($this->roles)) {
            Model::validateArray($this->roles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->roles) {
            if (\is_array($this->roles)) {
                $res['roles'] = [];
                $n1 = 0;
                foreach ($this->roles as $item1) {
                    $res['roles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        if (isset($map['roles'])) {
            if (!empty($map['roles'])) {
                $model->roles = [];
                $n1 = 0;
                foreach ($map['roles'] as $item1) {
                    $model->roles[$n1++] = Role::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
