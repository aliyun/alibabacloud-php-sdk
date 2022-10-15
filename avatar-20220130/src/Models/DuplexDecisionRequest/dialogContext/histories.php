<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avatar\V20220130\Models\DuplexDecisionRequest\dialogContext;

use AlibabaCloud\Tea\Model;

class histories extends Model
{
    /**
     * @var string
     */
    public $robot;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'robot' => 'Robot',
        'user'  => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->robot) {
            $res['Robot'] = $this->robot;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Robot'])) {
            $model->robot = $map['Robot'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
