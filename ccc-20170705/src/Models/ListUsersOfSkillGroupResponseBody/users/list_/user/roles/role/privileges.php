<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles\role;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles\role\privileges\privilege;

class privileges extends Model
{
    /**
     * @var privilege[]
     */
    public $privilege;
    protected $_name = [
        'privilege' => 'Privilege',
    ];

    public function validate()
    {
        if (\is_array($this->privilege)) {
            Model::validateArray($this->privilege);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privilege) {
            if (\is_array($this->privilege)) {
                $res['Privilege'] = [];
                $n1 = 0;
                foreach ($this->privilege as $item1) {
                    $res['Privilege'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Privilege'])) {
            if (!empty($map['Privilege'])) {
                $model->privilege = [];
                $n1 = 0;
                foreach ($map['Privilege'] as $item1) {
                    $model->privilege[$n1] = privilege::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
