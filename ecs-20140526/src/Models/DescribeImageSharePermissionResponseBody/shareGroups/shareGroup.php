<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageSharePermissionResponseBody\shareGroups;

use AlibabaCloud\Dara\Model;

class shareGroup extends Model
{
    /**
     * @var string
     */
    public $group;
    protected $_name = [
        'group' => 'Group',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = $this->group;
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
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        return $model;
    }
}
