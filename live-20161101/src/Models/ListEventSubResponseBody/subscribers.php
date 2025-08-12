<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEventSubResponseBody;

use AlibabaCloud\Dara\Model;

class subscribers extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $events;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $roles;

    /**
     * @var string
     */
    public $subId;

    /**
     * @var string[]
     */
    public $users;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'channelId' => 'ChannelId',
        'createTime' => 'CreateTime',
        'events' => 'Events',
        'modifyTime' => 'ModifyTime',
        'roles' => 'Roles',
        'subId' => 'SubId',
        'users' => 'Users',
    ];

    public function validate()
    {
        if (\is_array($this->events)) {
            Model::validateArray($this->events);
        }
        if (\is_array($this->users)) {
            Model::validateArray($this->users);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->events) {
            if (\is_array($this->events)) {
                $res['Events'] = [];
                $n1 = 0;
                foreach ($this->events as $item1) {
                    $res['Events'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->roles) {
            $res['Roles'] = $this->roles;
        }

        if (null !== $this->subId) {
            $res['SubId'] = $this->subId;
        }

        if (null !== $this->users) {
            if (\is_array($this->users)) {
                $res['Users'] = [];
                $n1 = 0;
                foreach ($this->users as $item1) {
                    $res['Users'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Events'])) {
            if (!empty($map['Events'])) {
                $model->events = [];
                $n1 = 0;
                foreach ($map['Events'] as $item1) {
                    $model->events[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Roles'])) {
            $model->roles = $map['Roles'];
        }

        if (isset($map['SubId'])) {
            $model->subId = $map['SubId'];
        }

        if (isset($map['Users'])) {
            if (!empty($map['Users'])) {
                $model->users = [];
                $n1 = 0;
                foreach ($map['Users'] as $item1) {
                    $model->users[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
