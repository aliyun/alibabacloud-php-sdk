<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;

use AlibabaCloud\Tea\Model;

class aclLimit extends Model
{
    /**
     * @description The user that can use the queue. Separate multiple users with commas (`,`).
     *
     * If you specify users, you must specify the PbsInfo.N.AclLimit.N.Queue parameter.
     * @example user1,user2
     *
     * @var string
     */
    public $aclUsers;

    /**
     * @description AclLimit specifies the queue that has limits when it is used. Valid values of N: 0 to 100.
     *
     * If you set `PbsInfo.N.AclLimit.N.Queue` to `workq` and `PbsInfo.N.AclLimit.N.AclUsers` to `user1,user2`, workq can be used only by user1 and user2.
     * @example workq
     *
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
