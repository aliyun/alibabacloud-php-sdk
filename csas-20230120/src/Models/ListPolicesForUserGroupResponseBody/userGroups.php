<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponseBody\userGroups\polices;
use AlibabaCloud\Tea\Model;

class userGroups extends Model
{
    /**
     * @var polices[]
     */
    public $polices;

    /**
     * @example usergroup-6f1ef2fc56b6****
     *
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'polices'     => 'Polices',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->polices) {
            $res['Polices'] = [];
            if (null !== $this->polices && \is_array($this->polices)) {
                $n = 0;
                foreach ($this->polices as $item) {
                    $res['Polices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Polices'])) {
            if (!empty($map['Polices'])) {
                $model->polices = [];
                $n              = 0;
                foreach ($map['Polices'] as $item) {
                    $model->polices[$n++] = null !== $item ? polices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
