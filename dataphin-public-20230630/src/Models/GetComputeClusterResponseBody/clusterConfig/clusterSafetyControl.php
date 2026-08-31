<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetComputeClusterResponseBody\clusterConfig;

use AlibabaCloud\Dara\Model;

class clusterSafetyControl extends Model
{
    /**
     * @var string
     */
    public $clusterSafetyAuthType;

    /**
     * @var string[]
     */
    public $userGroupIds;

    /**
     * @var string[]
     */
    public $userGroupNames;

    /**
     * @var string[]
     */
    public $userIds;

    /**
     * @var string[]
     */
    public $userNames;
    protected $_name = [
        'clusterSafetyAuthType' => 'ClusterSafetyAuthType',
        'userGroupIds' => 'UserGroupIds',
        'userGroupNames' => 'UserGroupNames',
        'userIds' => 'UserIds',
        'userNames' => 'UserNames',
    ];

    public function validate()
    {
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        if (\is_array($this->userGroupNames)) {
            Model::validateArray($this->userGroupNames);
        }
        if (\is_array($this->userIds)) {
            Model::validateArray($this->userIds);
        }
        if (\is_array($this->userNames)) {
            Model::validateArray($this->userNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterSafetyAuthType) {
            $res['ClusterSafetyAuthType'] = $this->clusterSafetyAuthType;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userGroupNames) {
            if (\is_array($this->userGroupNames)) {
                $res['UserGroupNames'] = [];
                $n1 = 0;
                foreach ($this->userGroupNames as $item1) {
                    $res['UserGroupNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userIds) {
            if (\is_array($this->userIds)) {
                $res['UserIds'] = [];
                $n1 = 0;
                foreach ($this->userIds as $item1) {
                    $res['UserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userNames) {
            if (\is_array($this->userNames)) {
                $res['UserNames'] = [];
                $n1 = 0;
                foreach ($this->userNames as $item1) {
                    $res['UserNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ClusterSafetyAuthType'])) {
            $model->clusterSafetyAuthType = $map['ClusterSafetyAuthType'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserGroupNames'])) {
            if (!empty($map['UserGroupNames'])) {
                $model->userGroupNames = [];
                $n1 = 0;
                foreach ($map['UserGroupNames'] as $item1) {
                    $model->userGroupNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserIds'])) {
            if (!empty($map['UserIds'])) {
                $model->userIds = [];
                $n1 = 0;
                foreach ($map['UserIds'] as $item1) {
                    $model->userIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = [];
                $n1 = 0;
                foreach ($map['UserNames'] as $item1) {
                    $model->userNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
