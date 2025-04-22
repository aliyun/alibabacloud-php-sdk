<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models\ListUserGroupsMappingsResponseBody;

use AlibabaCloud\Dara\Model;

class userGroupsMappings extends Model
{
    /**
     * @var string[]
     */
    public $groupNames;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'groupNames' => 'GroupNames',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        if (\is_array($this->groupNames)) {
            Model::validateArray($this->groupNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupNames) {
            if (\is_array($this->groupNames)) {
                $res['GroupNames'] = [];
                $n1 = 0;
                foreach ($this->groupNames as $item1) {
                    $res['GroupNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['GroupNames'])) {
            if (!empty($map['GroupNames'])) {
                $model->groupNames = [];
                $n1 = 0;
                foreach ($map['GroupNames'] as $item1) {
                    $model->groupNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
