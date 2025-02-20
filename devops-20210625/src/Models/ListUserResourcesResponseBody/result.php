<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\groupInfos;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\repositoryInfos;
use AlibabaCloud\SDK\Devops\V20210625\Models\ListUserResourcesResponseBody\result\userInfo;

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
        if (\is_array($this->groupInfos)) {
            Model::validateArray($this->groupInfos);
        }
        if (\is_array($this->repositoryInfos)) {
            Model::validateArray($this->repositoryInfos);
        }
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupInfos) {
            if (\is_array($this->groupInfos)) {
                $res['groupInfos'] = [];
                $n1                = 0;
                foreach ($this->groupInfos as $item1) {
                    $res['groupInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->repositoryInfos) {
            if (\is_array($this->repositoryInfos)) {
                $res['repositoryInfos'] = [];
                $n1                     = 0;
                foreach ($this->repositoryInfos as $item1) {
                    $res['repositoryInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->userInfo) {
            $res['userInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
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
        if (isset($map['groupInfos'])) {
            if (!empty($map['groupInfos'])) {
                $model->groupInfos = [];
                $n1                = 0;
                foreach ($map['groupInfos'] as $item1) {
                    $model->groupInfos[$n1++] = groupInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['repositoryInfos'])) {
            if (!empty($map['repositoryInfos'])) {
                $model->repositoryInfos = [];
                $n1                     = 0;
                foreach ($map['repositoryInfos'] as $item1) {
                    $model->repositoryInfos[$n1++] = repositoryInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['userInfo'])) {
            $model->userInfo = userInfo::fromMap($map['userInfo']);
        }

        return $model;
    }
}
