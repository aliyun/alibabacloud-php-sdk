<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\repositoryInfos\repositoryInfo;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\repositoryInfos\repositoryRole;

class repositoryInfos extends Model
{
    /**
     * @var repositoryInfo
     */
    public $repositoryInfo;

    /**
     * @var repositoryRole
     */
    public $repositoryRole;
    protected $_name = [
        'repositoryInfo' => 'repositoryInfo',
        'repositoryRole' => 'repositoryRole',
    ];

    public function validate()
    {
        if (null !== $this->repositoryInfo) {
            $this->repositoryInfo->validate();
        }
        if (null !== $this->repositoryRole) {
            $this->repositoryRole->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repositoryInfo) {
            $res['repositoryInfo'] = null !== $this->repositoryInfo ? $this->repositoryInfo->toArray($noStream) : $this->repositoryInfo;
        }

        if (null !== $this->repositoryRole) {
            $res['repositoryRole'] = null !== $this->repositoryRole ? $this->repositoryRole->toArray($noStream) : $this->repositoryRole;
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
        if (isset($map['repositoryInfo'])) {
            $model->repositoryInfo = repositoryInfo::fromMap($map['repositoryInfo']);
        }

        if (isset($map['repositoryRole'])) {
            $model->repositoryRole = repositoryRole::fromMap($map['repositoryRole']);
        }

        return $model;
    }
}
