<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeInstancePageResponseBody;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeInstancePageResponseBody\instanceList\ipList;
use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var string
     */
    public $instanceRemark;

    /**
     * @var ipList[]
     */
    public $ipList;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceRemark' => 'InstanceRemark',
        'ipList'         => 'IpList',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRemark) {
            $res['InstanceRemark'] = $this->instanceRemark;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRemark'])) {
            $model->instanceRemark = $map['InstanceRemark'];
        }
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
