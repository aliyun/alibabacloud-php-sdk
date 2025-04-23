<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Dara\Model;

class aclLimit extends Model
{
    /**
     * @var string
     */
    public $aclUsers;

    /**
     * @var string
     */
    public $queue;
    protected $_name = [
        'aclUsers' => 'AclUsers',
        'queue' => 'Queue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclUsers) {
            $res['AclUsers'] = $this->aclUsers;
        }

        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
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
        if (isset($map['AclUsers'])) {
            $model->aclUsers = $map['AclUsers'];
        }

        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        return $model;
    }
}
