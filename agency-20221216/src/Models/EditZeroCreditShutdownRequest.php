<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class EditZeroCreditShutdownRequest extends Model
{
    /**
     * @var string
     */
    public $shutdownPolicy;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'shutdownPolicy' => 'ShutdownPolicy',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->shutdownPolicy) {
            $res['ShutdownPolicy'] = $this->shutdownPolicy;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['ShutdownPolicy'])) {
            $model->shutdownPolicy = $map['ShutdownPolicy'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
