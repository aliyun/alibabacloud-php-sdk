<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody\flowList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody\ipCountOrFunctionList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody\monthlySummaryList;
use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody\standardAssetsFlowList;

class DescribeDdosOriginInstanceBillResponseBody extends Model
{
    /**
     * @var int
     */
    public $assetStatus;

    /**
     * @var int
     */
    public $debtStatus;

    /**
     * @var flowList[]
     */
    public $flowList;

    /**
     * @var mixed[]
     */
    public $flowRegion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var ipCountOrFunctionList[]
     */
    public $ipCountOrFunctionList;

    /**
     * @var string
     */
    public $ipInfo;

    /**
     * @var monthlySummaryList[]
     */
    public $monthlySummaryList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var standardAssetsFlowList[]
     */
    public $standardAssetsFlowList;

    /**
     * @var mixed[]
     */
    public $standardAssetsFlowRegion;

    /**
     * @var int
     */
    public $standardAssetsTotalFlowCn;

    /**
     * @var int
     */
    public $standardAssetsTotalFlowOv;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalFlowCn;

    /**
     * @var int
     */
    public $totalFlowOv;
    protected $_name = [
        'assetStatus' => 'AssetStatus',
        'debtStatus' => 'DebtStatus',
        'flowList' => 'FlowList',
        'flowRegion' => 'FlowRegion',
        'instanceId' => 'InstanceId',
        'ipCount' => 'IpCount',
        'ipCountOrFunctionList' => 'IpCountOrFunctionList',
        'ipInfo' => 'IpInfo',
        'monthlySummaryList' => 'MonthlySummaryList',
        'requestId' => 'RequestId',
        'standardAssetsFlowList' => 'StandardAssetsFlowList',
        'standardAssetsFlowRegion' => 'StandardAssetsFlowRegion',
        'standardAssetsTotalFlowCn' => 'StandardAssetsTotalFlowCn',
        'standardAssetsTotalFlowOv' => 'StandardAssetsTotalFlowOv',
        'status' => 'Status',
        'totalFlowCn' => 'TotalFlowCn',
        'totalFlowOv' => 'TotalFlowOv',
    ];

    public function validate()
    {
        if (\is_array($this->flowList)) {
            Model::validateArray($this->flowList);
        }
        if (\is_array($this->flowRegion)) {
            Model::validateArray($this->flowRegion);
        }
        if (\is_array($this->ipCountOrFunctionList)) {
            Model::validateArray($this->ipCountOrFunctionList);
        }
        if (\is_array($this->monthlySummaryList)) {
            Model::validateArray($this->monthlySummaryList);
        }
        if (\is_array($this->standardAssetsFlowList)) {
            Model::validateArray($this->standardAssetsFlowList);
        }
        if (\is_array($this->standardAssetsFlowRegion)) {
            Model::validateArray($this->standardAssetsFlowRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetStatus) {
            $res['AssetStatus'] = $this->assetStatus;
        }

        if (null !== $this->debtStatus) {
            $res['DebtStatus'] = $this->debtStatus;
        }

        if (null !== $this->flowList) {
            if (\is_array($this->flowList)) {
                $res['FlowList'] = [];
                $n1 = 0;
                foreach ($this->flowList as $item1) {
                    $res['FlowList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->flowRegion) {
            if (\is_array($this->flowRegion)) {
                $res['FlowRegion'] = [];
                foreach ($this->flowRegion as $key1 => $value1) {
                    $res['FlowRegion'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }

        if (null !== $this->ipCountOrFunctionList) {
            if (\is_array($this->ipCountOrFunctionList)) {
                $res['IpCountOrFunctionList'] = [];
                $n1 = 0;
                foreach ($this->ipCountOrFunctionList as $item1) {
                    $res['IpCountOrFunctionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipInfo) {
            $res['IpInfo'] = $this->ipInfo;
        }

        if (null !== $this->monthlySummaryList) {
            if (\is_array($this->monthlySummaryList)) {
                $res['MonthlySummaryList'] = [];
                $n1 = 0;
                foreach ($this->monthlySummaryList as $item1) {
                    $res['MonthlySummaryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->standardAssetsFlowList) {
            if (\is_array($this->standardAssetsFlowList)) {
                $res['StandardAssetsFlowList'] = [];
                $n1 = 0;
                foreach ($this->standardAssetsFlowList as $item1) {
                    $res['StandardAssetsFlowList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardAssetsFlowRegion) {
            if (\is_array($this->standardAssetsFlowRegion)) {
                $res['StandardAssetsFlowRegion'] = [];
                foreach ($this->standardAssetsFlowRegion as $key1 => $value1) {
                    $res['StandardAssetsFlowRegion'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetStatus'])) {
            $model->assetStatus = $map['AssetStatus'];
        }

        if (isset($map['DebtStatus'])) {
            $model->debtStatus = $map['DebtStatus'];
        }

        if (isset($map['FlowList'])) {
            if (!empty($map['FlowList'])) {
                $model->flowList = [];
                $n1 = 0;
                foreach ($map['FlowList'] as $item1) {
                    $model->flowList[$n1] = flowList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FlowRegion'])) {
            if (!empty($map['FlowRegion'])) {
                $model->flowRegion = [];
                foreach ($map['FlowRegion'] as $key1 => $value1) {
                    $model->flowRegion[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['IpCountOrFunctionList'] as $item1) {
                    $model->ipCountOrFunctionList[$n1] = ipCountOrFunctionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IpInfo'])) {
            $model->ipInfo = $map['IpInfo'];
        }

        if (isset($map['MonthlySummaryList'])) {
            if (!empty($map['MonthlySummaryList'])) {
                $model->monthlySummaryList = [];
                $n1 = 0;
                foreach ($map['MonthlySummaryList'] as $item1) {
                    $model->monthlySummaryList[$n1] = monthlySummaryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StandardAssetsFlowList'])) {
            if (!empty($map['StandardAssetsFlowList'])) {
                $model->standardAssetsFlowList = [];
                $n1 = 0;
                foreach ($map['StandardAssetsFlowList'] as $item1) {
                    $model->standardAssetsFlowList[$n1] = standardAssetsFlowList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardAssetsFlowRegion'])) {
            if (!empty($map['StandardAssetsFlowRegion'])) {
                $model->standardAssetsFlowRegion = [];
                foreach ($map['StandardAssetsFlowRegion'] as $key1 => $value1) {
                    $model->standardAssetsFlowRegion[$key1] = $value1;
                }
            }
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
