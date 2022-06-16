<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponseBody;

use AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponseBody\result\basicInfo;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponseBody\result\instanceInfo;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponseBody\result\netInfo;
use AlibabaCloud\SDK\Retailcloud\V20180313\Models\QueryClusterDetailResponseBody\result\workLoad;
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
     * @var string[]
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
            $res['NodeWorkLoadList'] = $this->nodeWorkLoadList;
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
                $model->nodeWorkLoadList = $map['NodeWorkLoadList'];
            }
        }
        if (isset($map['WorkLoad'])) {
            $model->workLoad = workLoad::fromMap($map['WorkLoad']);
        }

        return $model;
    }
}
