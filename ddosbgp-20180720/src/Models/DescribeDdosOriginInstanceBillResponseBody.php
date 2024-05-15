<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody\flowList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody\ipCountOrFunctionList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody\standardAssetsFlowList;
use AlibabaCloud\Tea\Model;

class DescribeDdosOriginInstanceBillResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $debtStatus;

    /**
     * @var flowList[]
     */
    public $flowList;

    /**
     * @example {\\"cn-hongkong\\": 166491566}
     *
     * @var mixed[]
     */
    public $flowRegion;

    /**
     * @example ddosorigin_cn-u7c3lcr9r02
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 15
     *
     * @var int
     */
    public $ipCount;

    /**
     * @var ipCountOrFunctionList[]
     */
    public $ipCountOrFunctionList;

    /**
     * @example {\\"eipCnIpCount\\":6,\\"eipOvIpCount\\":17,\\"standardAssetsCnIpCount\\":2,\\"standardAssetsOvIpCount\\":0}
     *
     * @var string
     */
    public $ipInfo;

    /**
     * @example 72155560-F343-55C8-82FE-ED4D7E4AA97E
     *
     * @var string
     */
    public $requestId;

    /**
     * @var standardAssetsFlowList[]
     */
    public $standardAssetsFlowList;

    /**
     * @example {\\"cn-hongkong\\": 166491566}
     *
     * @var mixed[]
     */
    public $standardAssetsFlowRegion;

    /**
     * @example 0
     *
     * @var int
     */
    public $standardAssetsTotalFlowCn;

    /**
     * @example 0
     *
     * @var int
     */
    public $standardAssetsTotalFlowOv;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 6302081067
     *
     * @var int
     */
    public $totalFlowCn;

    /**
     * @example 6204918019
     *
     * @var int
     */
    public $totalFlowOv;
    protected $_name = [
        'debtStatus'                => 'DebtStatus',
        'flowList'                  => 'FlowList',
        'flowRegion'                => 'FlowRegion',
        'instanceId'                => 'InstanceId',
        'ipCount'                   => 'IpCount',
        'ipCountOrFunctionList'     => 'IpCountOrFunctionList',
        'ipInfo'                    => 'IpInfo',
        'requestId'                 => 'RequestId',
        'standardAssetsFlowList'    => 'StandardAssetsFlowList',
        'standardAssetsFlowRegion'  => 'StandardAssetsFlowRegion',
        'standardAssetsTotalFlowCn' => 'StandardAssetsTotalFlowCn',
        'standardAssetsTotalFlowOv' => 'StandardAssetsTotalFlowOv',
        'status'                    => 'Status',
        'totalFlowCn'               => 'TotalFlowCn',
        'totalFlowOv'               => 'TotalFlowOv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debtStatus) {
            $res['DebtStatus'] = $this->debtStatus;
        }
        if (null !== $this->flowList) {
            $res['FlowList'] = [];
            if (null !== $this->flowList && \is_array($this->flowList)) {
                $n = 0;
                foreach ($this->flowList as $item) {
                    $res['FlowList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->flowRegion) {
            $res['FlowRegion'] = $this->flowRegion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->ipCountOrFunctionList) {
            $res['IpCountOrFunctionList'] = [];
            if (null !== $this->ipCountOrFunctionList && \is_array($this->ipCountOrFunctionList)) {
                $n = 0;
                foreach ($this->ipCountOrFunctionList as $item) {
                    $res['IpCountOrFunctionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ipInfo) {
            $res['IpInfo'] = $this->ipInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->standardAssetsFlowList) {
            $res['StandardAssetsFlowList'] = [];
            if (null !== $this->standardAssetsFlowList && \is_array($this->standardAssetsFlowList)) {
                $n = 0;
                foreach ($this->standardAssetsFlowList as $item) {
                    $res['StandardAssetsFlowList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->standardAssetsFlowRegion) {
            $res['StandardAssetsFlowRegion'] = $this->standardAssetsFlowRegion;
        }
        if (null !== $this->standardAssetsTotalFlowCn) {
            $res['StandardAssetsTotalFlowCn'] = $this->standardAssetsTotalFlowCn;
        }
        if (null !== $this->standardAssetsTotalFlowOv) {
            $res['StandardAssetsTotalFlowOv'] = $this->standardAssetsTotalFlowOv;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalFlowCn) {
            $res['TotalFlowCn'] = $this->totalFlowCn;
        }
        if (null !== $this->totalFlowOv) {
            $res['TotalFlowOv'] = $this->totalFlowOv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosOriginInstanceBillResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebtStatus'])) {
            $model->debtStatus = $map['DebtStatus'];
        }
        if (isset($map['FlowList'])) {
            if (!empty($map['FlowList'])) {
                $model->flowList = [];
                $n               = 0;
                foreach ($map['FlowList'] as $item) {
                    $model->flowList[$n++] = null !== $item ? flowList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FlowRegion'])) {
            $model->flowRegion = $map['FlowRegion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['IpCountOrFunctionList'])) {
            if (!empty($map['IpCountOrFunctionList'])) {
                $model->ipCountOrFunctionList = [];
                $n                            = 0;
                foreach ($map['IpCountOrFunctionList'] as $item) {
                    $model->ipCountOrFunctionList[$n++] = null !== $item ? ipCountOrFunctionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IpInfo'])) {
            $model->ipInfo = $map['IpInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StandardAssetsFlowList'])) {
            if (!empty($map['StandardAssetsFlowList'])) {
                $model->standardAssetsFlowList = [];
                $n                             = 0;
                foreach ($map['StandardAssetsFlowList'] as $item) {
                    $model->standardAssetsFlowList[$n++] = null !== $item ? standardAssetsFlowList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StandardAssetsFlowRegion'])) {
            $model->standardAssetsFlowRegion = $map['StandardAssetsFlowRegion'];
        }
        if (isset($map['StandardAssetsTotalFlowCn'])) {
            $model->standardAssetsTotalFlowCn = $map['StandardAssetsTotalFlowCn'];
        }
        if (isset($map['StandardAssetsTotalFlowOv'])) {
            $model->standardAssetsTotalFlowOv = $map['StandardAssetsTotalFlowOv'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalFlowCn'])) {
            $model->totalFlowCn = $map['TotalFlowCn'];
        }
        if (isset($map['TotalFlowOv'])) {
            $model->totalFlowOv = $map['TotalFlowOv'];
        }

        return $model;
    }
}
