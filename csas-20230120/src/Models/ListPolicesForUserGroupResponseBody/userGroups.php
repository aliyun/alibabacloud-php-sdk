<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForUserGroupResponseBody\userGroups\polices;

class userGroups extends Model
{
    /**
     * @var polices[]
     */
    public $polices;
    /**
     * @var string
     */
    public $userGroupId;
    protected $_name = [
        'polices'     => 'Polices',
        'userGroupId' => 'UserGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->polices)) {
            Model::validateArray($this->polices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->polices) {
            if (\is_array($this->polices)) {
                $res['Polices'] = [];
                $n1             = 0;
                foreach ($this->polices as $item1) {
                    $res['Polices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['Polices'])) {
            if (!empty($map['Polices'])) {
                $model->polices = [];
                $n1             = 0;
                foreach ($map['Polices'] as $item1) {
                    $model->polices[$n1++] = polices::fromMap($item1);
                }
            }
        }

        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
