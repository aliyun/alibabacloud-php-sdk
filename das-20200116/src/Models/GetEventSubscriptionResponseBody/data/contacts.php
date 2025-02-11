<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetEventSubscriptionResponseBody\data;

use AlibabaCloud\Dara\Model;

class contacts extends Model
{
    /**
     * @var string
     */
    public $dingtalkHook;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string[]
     */
    public $groups;
    /**
     * @var bool
     */
    public $isCmsReduplicated;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'dingtalkHook'      => 'dingtalkHook',
        'email'             => 'email',
        'groups'            => 'groups',
        'isCmsReduplicated' => 'isCmsReduplicated',
        'name'              => 'name',
        'phone'             => 'phone',
        'userId'            => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingtalkHook) {
            $res['dingtalkHook'] = $this->dingtalkHook;
        }

        if (null !== $this->email) {
            $res['email'] = $this->email;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['groups'] = [];
                $n1            = 0;
                foreach ($this->groups as $item1) {
                    $res['groups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->isCmsReduplicated) {
            $res['isCmsReduplicated'] = $this->isCmsReduplicated;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['dingtalkHook'])) {
            $model->dingtalkHook = $map['dingtalkHook'];
        }

        if (isset($map['email'])) {
            $model->email = $map['email'];
        }

        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = [];
                $n1            = 0;
                foreach ($map['groups'] as $item1) {
                    $model->groups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['isCmsReduplicated'])) {
            $model->isCmsReduplicated = $map['isCmsReduplicated'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
