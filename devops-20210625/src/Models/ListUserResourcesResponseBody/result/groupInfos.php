<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\groupInfos\groupInfo;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\groupInfos\groupRole;

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
        if (null !== $this->groupInfo) {
            $this->groupInfo->validate();
        }
        if (null !== $this->groupRole) {
            $this->groupRole->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toArray($noStream) : $this->groupInfo;
        }

        if (null !== $this->groupRole) {
            $res['groupRole'] = null !== $this->groupRole ? $this->groupRole->toArray($noStream) : $this->groupRole;
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
        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }

        if (isset($map['groupRole'])) {
            $model->groupRole = groupRole::fromMap($map['groupRole']);
        }

        return $model;
    }
}
