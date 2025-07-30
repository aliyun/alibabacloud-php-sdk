<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeUsersResponseBody\users;

use AlibabaCloud\Tea\Model;

class extras extends Model
{
    /**
     * @var mixed[]
     */
    public $assignedResourceCount;
    protected $_name = [
        'assignedResourceCount' => 'AssignedResourceCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedResourceCount) {
            $res['AssignedResourceCount'] = $this->assignedResourceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extras
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignedResourceCount'])) {
            $model->assignedResourceCount = $map['AssignedResourceCount'];
        }

        return $model;
    }
}
