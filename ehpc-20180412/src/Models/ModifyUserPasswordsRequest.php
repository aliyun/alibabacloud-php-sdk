<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyUserPasswordsRequest\user;

class ModifyUserPasswordsRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var user[]
     */
    public $user;
    protected $_name = [
        'async' => 'Async',
        'clusterId' => 'ClusterId',
        'user' => 'User',
    ];

    public function validate()
    {
        if (\is_array($this->user)) {
            Model::validateArray($this->user);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->user) {
            if (\is_array($this->user)) {
                $res['User'] = [];
                $n1 = 0;
                foreach ($this->user as $item1) {
                    $res['User'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['User'])) {
            if (!empty($map['User'])) {
                $model->user = [];
                $n1 = 0;
                foreach ($map['User'] as $item1) {
                    $model->user[$n1++] = user::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
