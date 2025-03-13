<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\groupInfos\groupInfo;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\groupInfos\groupRole;
use AlibabaCloud\Tea\Model;

class groupInfos extends Model
{
    /**
     * @var groupInfo
     */
    public $groupInfo;

    /**
     * @var groupRole
     */
    public $groupRole;
    protected $_name = [
        'groupInfo' => 'groupInfo',
        'groupRole' => 'groupRole',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toMap() : null;
        }
        if (null !== $this->groupRole) {
            $res['groupRole'] = null !== $this->groupRole ? $this->groupRole->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }
        if (isset($map['groupRole'])) {
            $model->groupRole = groupRole::fromMap($map['groupRole']);
        }

        return $model;
    }
}
