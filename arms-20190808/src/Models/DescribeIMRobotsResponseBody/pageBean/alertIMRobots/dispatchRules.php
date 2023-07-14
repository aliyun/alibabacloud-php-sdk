<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeIMRobotsResponseBody\pageBean\alertIMRobots;

use AlibabaCloud\Tea\Model;

class dispatchRules extends Model
{
    /**
     * @description The ID of the notification policy.
     *
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the notification policy.
     *
     * @example Notification policy test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'id',
        'name' => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dispatchRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
