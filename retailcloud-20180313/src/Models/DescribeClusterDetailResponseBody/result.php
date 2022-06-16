<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\basicInfo;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\instanceInfo;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\netInfo;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\nodeWorkLoadList;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\workLoad;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var basicInfo
     */
    public $basicInfo;

    /**
     * @var instanceInfo
     */
    public $instanceInfo;

    /**
     * @var netInfo
     */
    public $netInfo;

    /**
     * @var nodeWorkLoadList[]
     */
    public $nodeWorkLoadList;

    /**
     * @var workLoad
     */
    public $workLoad;
    protected $_name = [
        'basicInfo'        => 'BasicInfo',
        'instanceInfo'     => 'InstanceInfo',
        'netInfo'          => 'NetInfo',
        'nodeWorkLoadList' => 'NodeWorkLoadList',
        'workLoad'         => 'WorkLoad',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicInfo) {
            $res['BasicInfo'] = null !== $this->basicInfo ? $this->basicInfo->toMap() : null;
        }
        if (null !== $this->instanceInfo) {
            $res['InstanceInfo'] = null !== $this->instanceInfo ? $this->instanceInfo->toMap() : null;
        }
        if (null !== $this->netInfo) {
            $res['NetInfo'] = null !== $this->netInfo ? $this->netInfo->toMap() : null;
        }
        if (null !== $this->nodeWorkLoadList) {
            $res['NodeWorkLoadList'] = [];
            if (null !== $this->nodeWorkLoadList && \is_array($this->nodeWorkLoadList)) {
                $n = 0;
                foreach ($this->nodeWorkLoadList as $item) {
                    $res['NodeWorkLoadList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workLoad) {
            $res['WorkLoad'] = null !== $this->workLoad ? $this->workLoad->toMap() : null;
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
        if (isset($map['BasicInfo'])) {
            $model->basicInfo = basicInfo::fromMap($map['BasicInfo']);
        }
        if (isset($map['InstanceInfo'])) {
            $model->instanceInfo = instanceInfo::fromMap($map['InstanceInfo']);
        }
        if (isset($map['NetInfo'])) {
            $model->netInfo = netInfo::fromMap($map['NetInfo']);
        }
        if (isset($map['NodeWorkLoadList'])) {
            if (!empty($map['NodeWorkLoadList'])) {
                $model->nodeWorkLoadList = [];
                $n                       = 0;
                foreach ($map['NodeWorkLoadList'] as $item) {
                    $model->nodeWorkLoadList[$n++] = null !== $item ? nodeWorkLoadList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkLoad'])) {
            $model->workLoad = workLoad::fromMap($map['WorkLoad']);
        }

        return $model;
    }
}
