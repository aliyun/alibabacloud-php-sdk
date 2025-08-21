<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;

class ListUserMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $beforeTime;

    /**
     * @var string
     */
    public $userInfoShrink;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'beforeTime' => 'BeforeTime',
        'userInfoShrink' => 'UserInfo',
        'limit' => 'limit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }

        if (null !== $this->userInfoShrink) {
            $res['UserInfo'] = $this->userInfoShrink;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
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
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfoShrink = $map['UserInfo'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        return $model;
    }
}
