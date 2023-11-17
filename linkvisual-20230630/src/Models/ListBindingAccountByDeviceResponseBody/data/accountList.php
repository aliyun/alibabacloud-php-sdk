<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models\ListBindingAccountByDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class accountList extends Model
{
    /**
     * @var int
     */
    public $bindTime;

    /**
     * @var string
     */
    public $identityAlias;

    /**
     * @var string
     */
    public $identityId;
    protected $_name = [
        'bindTime'      => 'BindTime',
        'identityAlias' => 'IdentityAlias',
        'identityId'    => 'IdentityId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindTime) {
            $res['BindTime'] = $this->bindTime;
        }
        if (null !== $this->identityAlias) {
            $res['IdentityAlias'] = $this->identityAlias;
        }
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accountList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindTime'])) {
            $model->bindTime = $map['BindTime'];
        }
        if (isset($map['IdentityAlias'])) {
            $model->identityAlias = $map['IdentityAlias'];
        }
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }

        return $model;
    }
}
