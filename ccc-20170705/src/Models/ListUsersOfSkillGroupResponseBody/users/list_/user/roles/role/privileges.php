<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles\role;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListUsersOfSkillGroupResponseBody\users\list_\user\roles\role\privileges\privilege;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privilege) {
            $res['Privilege'] = [];
            if (null !== $this->privilege && \is_array($this->privilege)) {
                $n = 0;
                foreach ($this->privilege as $item) {
                    $res['Privilege'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privileges
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Privilege'])) {
            if (!empty($map['Privilege'])) {
                $model->privilege = [];
                $n                = 0;
                foreach ($map['Privilege'] as $item) {
                    $model->privilege[$n++] = null !== $item ? privilege::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
