<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponseBody\groupList;
use AlibabaCloud\Tea\Model;

class GetInstanceIpWhiteListResponseBody extends Model
{
    /**
     * @description The details about the IP address whitelists.
     *
     * @var groupList[]
     */
    public $groupList;

    /**
     * @description The ID of the Lindorm instance.
     *
     * @example ld-bp1z3506imz2f****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ipList;

    /**
     * @description The ID of the request.
     *
     * @example 1D1F6F4D-9203-53E7-84E9-5376B4657E63
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupList'  => 'GroupList',
        'instanceId' => 'InstanceId',
        'ipList'     => 'IpList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupList) {
            $res['GroupList'] = [];
            if (null !== $this->groupList && \is_array($this->groupList)) {
                $n = 0;
                foreach ($this->groupList as $item) {
                    $res['GroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceIpWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n                = 0;
                foreach ($map['GroupList'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = $map['IpList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
