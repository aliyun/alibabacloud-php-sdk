<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeUserInfoInChannelResponseBody;

use AlibabaCloud\Dara\Model;

class property extends Model
{
    /**
     * @var int
     */
    public $join;

    /**
     * @var int
     */
    public $role;

    /**
     * @var string
     */
    public $session;
    protected $_name = [
        'join' => 'Join',
        'role' => 'Role',
        'session' => 'Session',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->join) {
            $res['Join'] = $this->join;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->session) {
            $res['Session'] = $this->session;
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
        if (isset($map['Join'])) {
            $model->join = $map['Join'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Session'])) {
            $model->session = $map['Session'];
        }

        return $model;
    }
}
