<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgUserGroupAddOrUpdateRequest\userGroups;

class DsgUserGroupAddOrUpdateRequest extends Model
{
    /**
     * @var userGroups[]
     */
    public $userGroups;
    protected $_name = [
        'userGroups' => 'UserGroups',
    ];

    public function validate()
    {
        if (\is_array($this->userGroups)) {
            Model::validateArray($this->userGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->userGroups) {
            if (\is_array($this->userGroups)) {
                $res['UserGroups'] = [];
                $n1 = 0;
                foreach ($this->userGroups as $item1) {
                    $res['UserGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n1 = 0;
                foreach ($map['UserGroups'] as $item1) {
                    $model->userGroups[$n1] = userGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
