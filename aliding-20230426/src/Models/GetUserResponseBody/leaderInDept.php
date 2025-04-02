<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetUserResponseBody;

use AlibabaCloud\Dara\Model;

class leaderInDept extends Model
{
    /**
     * @var int
     */
    public $deptId;

    /**
     * @var bool
     */
    public $leader;
    protected $_name = [
        'deptId' => 'deptId',
        'leader' => 'leader',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deptId) {
            $res['deptId'] = $this->deptId;
        }

        if (null !== $this->leader) {
            $res['leader'] = $this->leader;
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
        if (isset($map['deptId'])) {
            $model->deptId = $map['deptId'];
        }

        if (isset($map['leader'])) {
            $model->leader = $map['leader'];
        }

        return $model;
    }
}
