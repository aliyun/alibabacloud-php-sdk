<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListUsersResponseBody\users;

use AlibabaCloud\Dara\Model;

class userInfo extends Model
{
    /**
     * @var string
     */
    public $addTime;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'addTime' => 'AddTime',
        'group' => 'Group',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
