<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Tea\Model;

class aclLimit extends Model
{
    /**
     * @var string
     */
    public $queue;

    /**
     * @var string
     */
    public $aclUsers;
    protected $_name = [
        'queue'    => 'Queue',
        'aclUsers' => 'AclUsers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->aclUsers) {
            $res['AclUsers'] = $this->aclUsers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['AclUsers'])) {
            $model->aclUsers = $map['AclUsers'];
        }

        return $model;
    }
}
