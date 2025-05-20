<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponseBody\groupList;

class GetInstanceIpWhiteListResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var groupList[]
     */
    public $groupList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'groupList' => 'GroupList',
        'instanceId' => 'InstanceId',
        'ipList' => 'IpList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        if (\is_array($this->ipList)) {
            Model::validateArray($this->ipList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['GroupList'] = [];
                $n1 = 0;
                foreach ($this->groupList as $item1) {
                    $res['GroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipList) {
            if (\is_array($this->ipList)) {
                $res['IpList'] = [];
                $n1 = 0;
                foreach ($this->ipList as $item1) {
                    $res['IpList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n1 = 0;
                foreach ($map['GroupList'] as $item1) {
                    $model->groupList[$n1++] = groupList::fromMap($item1);
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n1 = 0;
                foreach ($map['IpList'] as $item1) {
                    $model->ipList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
