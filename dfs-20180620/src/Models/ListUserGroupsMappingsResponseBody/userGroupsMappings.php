<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\ListUserGroupsMappingsResponseBody;

use AlibabaCloud\Tea\Model;

class userGroupsMappings extends Model
{
    /**
     * @var string[]
     */
    public $groupNames;

    /**
     * @example user1
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'groupNames' => 'GroupNames',
        'userName'   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupNames) {
            $res['GroupNames'] = $this->groupNames;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userGroupsMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupNames'])) {
            if (!empty($map['GroupNames'])) {
                $model->groupNames = $map['GroupNames'];
            }
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
