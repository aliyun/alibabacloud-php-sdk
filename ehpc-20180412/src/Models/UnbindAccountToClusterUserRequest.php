<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class UnbindAccountToClusterUserRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $accountUid;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'userName'   => 'UserName',
        'accountUid' => 'AccountUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->accountUid) {
            $res['AccountUid'] = $this->accountUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindAccountToClusterUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['AccountUid'])) {
            $model->accountUid = $map['AccountUid'];
        }

        return $model;
    }
}
