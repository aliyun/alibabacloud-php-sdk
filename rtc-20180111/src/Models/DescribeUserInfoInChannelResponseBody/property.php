<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponseBody;

use AlibabaCloud\Tea\Model;

class property extends Model
{
    /**
     * @var string
     */
    public $session;

    /**
     * @var int
     */
    public $join;

    /**
     * @var int
     */
    public $role;
    protected $_name = [
        'session' => 'Session',
        'join'    => 'Join',
        'role'    => 'Role',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->session) {
            $res['Session'] = $this->session;
        }
        if (null !== $this->join) {
            $res['Join'] = $this->join;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return property
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Session'])) {
            $model->session = $map['Session'];
        }
        if (isset($map['Join'])) {
            $model->join = $map['Join'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
