<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ListUsersForGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example user_001
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'instanceId' => 'instanceId',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
