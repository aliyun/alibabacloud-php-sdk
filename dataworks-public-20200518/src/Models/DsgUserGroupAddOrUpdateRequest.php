<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgUserGroupAddOrUpdateRequest\userGroups;
use AlibabaCloud\Tea\Model;

class DsgUserGroupAddOrUpdateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var userGroups[]
     */
    public $userGroups;
    protected $_name = [
        'userGroups' => 'UserGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userGroups) {
            $res['UserGroups'] = [];
            if (null !== $this->userGroups && \is_array($this->userGroups)) {
                $n = 0;
                foreach ($this->userGroups as $item) {
                    $res['UserGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgUserGroupAddOrUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n                 = 0;
                foreach ($map['UserGroups'] as $item) {
                    $model->userGroups[$n++] = null !== $item ? userGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
