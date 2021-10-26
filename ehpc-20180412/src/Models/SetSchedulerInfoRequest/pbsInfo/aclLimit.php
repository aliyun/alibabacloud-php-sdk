<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Tea\Model;

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
        'queue'    => 'Queue',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return aclLimit
     */
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
