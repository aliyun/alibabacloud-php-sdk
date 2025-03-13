<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\repositoryInfos\repositoryInfo;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\repositoryInfos\repositoryRole;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->repositoryInfo) {
            $res['repositoryInfo'] = null !== $this->repositoryInfo ? $this->repositoryInfo->toMap() : null;
        }
        if (null !== $this->repositoryRole) {
            $res['repositoryRole'] = null !== $this->repositoryRole ? $this->repositoryRole->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repositoryInfos
     */
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
