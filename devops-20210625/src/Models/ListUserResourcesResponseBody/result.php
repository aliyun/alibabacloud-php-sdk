<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\groupInfos;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\repositoryInfos;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\userInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var groupInfos[]
     */
    public $groupInfos;

    /**
     * @var repositoryInfos[]
     */
    public $repositoryInfos;

    /**
     * @var userInfo
     */
    public $userInfo;
    protected $_name = [
        'groupInfos'      => 'groupInfos',
        'repositoryInfos' => 'repositoryInfos',
        'userInfo'        => 'userInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupInfos) {
            $res['groupInfos'] = [];
            if (null !== $this->groupInfos && \is_array($this->groupInfos)) {
                $n = 0;
                foreach ($this->groupInfos as $item) {
                    $res['groupInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->repositoryInfos) {
            $res['repositoryInfos'] = [];
            if (null !== $this->repositoryInfos && \is_array($this->repositoryInfos)) {
                $n = 0;
                foreach ($this->repositoryInfos as $item) {
                    $res['repositoryInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userInfo) {
            $res['userInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['groupInfos'])) {
            if (!empty($map['groupInfos'])) {
                $model->groupInfos = [];
                $n                 = 0;
                foreach ($map['groupInfos'] as $item) {
                    $model->groupInfos[$n++] = null !== $item ? groupInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['repositoryInfos'])) {
            if (!empty($map['repositoryInfos'])) {
                $model->repositoryInfos = [];
                $n                      = 0;
                foreach ($map['repositoryInfos'] as $item) {
                    $model->repositoryInfos[$n++] = null !== $item ? repositoryInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['userInfo'])) {
            $model->userInfo = userInfo::fromMap($map['userInfo']);
        }

        return $model;
    }
}
