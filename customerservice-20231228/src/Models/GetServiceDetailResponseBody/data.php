<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody;

use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\appointments;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\payOrders;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performancePacks;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\serviceReports;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applierId;

    /**
     * @var string
     */
    public $applyCode;

    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var appointments[]
     */
    public $appointments;

    /**
     * @var string
     */
    public $buyUrl;

    /**
     * @var string
     */
    public $creatorEmpId;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var bool
     */
    public $cycleService;

    /**
     * @var int
     */
    public $executedCount;

    /**
     * @var int
     */
    public $finishCount;

    /**
     * @var mixed[]
     */
    public $formMap;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $mergeSolutionAndReporterOneStep;

    /**
     * @var string
     */
    public $modifierEmpId;

    /**
     * @var mixed[][]
     */
    public $packDetails;

    /**
     * @var payOrders[]
     */
    public $payOrders;

    /**
     * @var string
     */
    public $payUrl;

    /**
     * @var performanceOrders[]
     */
    public $performanceOrders;

    /**
     * @var performancePacks[]
     */
    public $performancePacks;

    /**
     * @var string
     */
    public $reneWalUrl;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var serviceReports[]
     */
    public $serviceReports;

    /**
     * @var int[]
     */
    public $serviceTimeRange;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusStr;

    /**
     * @var string
     */
    public $termOfValidity;

    /**
     * @var int
     */
    public $totalPack;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $usePack;
    protected $_name = [
        'applierId'                       => 'applierId',
        'applyCode'                       => 'applyCode',
        'applyTime'                       => 'applyTime',
        'appointments'                    => 'appointments',
        'buyUrl'                          => 'buyUrl',
        'creatorEmpId'                    => 'creatorEmpId',
        'customerName'                    => 'customerName',
        'cycleService'                    => 'cycleService',
        'executedCount'                   => 'executedCount',
        'finishCount'                     => 'finishCount',
        'formMap'                         => 'formMap',
        'gmtCreate'                       => 'gmtCreate',
        'gmtModified'                     => 'gmtModified',
        'id'                              => 'id',
        'mergeSolutionAndReporterOneStep' => 'mergeSolutionAndReporterOneStep',
        'modifierEmpId'                   => 'modifierEmpId',
        'packDetails'                     => 'packDetails',
        'payOrders'                       => 'payOrders',
        'payUrl'                          => 'payUrl',
        'performanceOrders'               => 'performanceOrders',
        'performancePacks'                => 'performancePacks',
        'reneWalUrl'                      => 'reneWalUrl',
        'serviceCode'                     => 'serviceCode',
        'serviceName'                     => 'serviceName',
        'serviceReports'                  => 'serviceReports',
        'serviceTimeRange'                => 'serviceTimeRange',
        'status'                          => 'status',
        'statusCode'                      => 'statusCode',
        'statusStr'                       => 'statusStr',
        'termOfValidity'                  => 'termOfValidity',
        'totalPack'                       => 'totalPack',
        'type'                            => 'type',
        'usePack'                         => 'usePack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applierId) {
            $res['applierId'] = $this->applierId;
        }
        if (null !== $this->applyCode) {
            $res['applyCode'] = $this->applyCode;
        }
        if (null !== $this->applyTime) {
            $res['applyTime'] = $this->applyTime;
        }
        if (null !== $this->appointments) {
            $res['appointments'] = [];
            if (null !== $this->appointments && \is_array($this->appointments)) {
                $n = 0;
                foreach ($this->appointments as $item) {
                    $res['appointments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->buyUrl) {
            $res['buyUrl'] = $this->buyUrl;
        }
        if (null !== $this->creatorEmpId) {
            $res['creatorEmpId'] = $this->creatorEmpId;
        }
        if (null !== $this->customerName) {
            $res['customerName'] = $this->customerName;
        }
        if (null !== $this->cycleService) {
            $res['cycleService'] = $this->cycleService;
        }
        if (null !== $this->executedCount) {
            $res['executedCount'] = $this->executedCount;
        }
        if (null !== $this->finishCount) {
            $res['finishCount'] = $this->finishCount;
        }
        if (null !== $this->formMap) {
            $res['formMap'] = $this->formMap;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->mergeSolutionAndReporterOneStep) {
            $res['mergeSolutionAndReporterOneStep'] = $this->mergeSolutionAndReporterOneStep;
        }
        if (null !== $this->modifierEmpId) {
            $res['modifierEmpId'] = $this->modifierEmpId;
        }
        if (null !== $this->packDetails) {
            $res['packDetails'] = $this->packDetails;
        }
        if (null !== $this->payOrders) {
            $res['payOrders'] = [];
            if (null !== $this->payOrders && \is_array($this->payOrders)) {
                $n = 0;
                foreach ($this->payOrders as $item) {
                    $res['payOrders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->payUrl) {
            $res['payUrl'] = $this->payUrl;
        }
        if (null !== $this->performanceOrders) {
            $res['performanceOrders'] = [];
            if (null !== $this->performanceOrders && \is_array($this->performanceOrders)) {
                $n = 0;
                foreach ($this->performanceOrders as $item) {
                    $res['performanceOrders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->performancePacks) {
            $res['performancePacks'] = [];
            if (null !== $this->performancePacks && \is_array($this->performancePacks)) {
                $n = 0;
                foreach ($this->performancePacks as $item) {
                    $res['performancePacks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reneWalUrl) {
            $res['reneWalUrl'] = $this->reneWalUrl;
        }
        if (null !== $this->serviceCode) {
            $res['serviceCode'] = $this->serviceCode;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->serviceReports) {
            $res['serviceReports'] = [];
            if (null !== $this->serviceReports && \is_array($this->serviceReports)) {
                $n = 0;
                foreach ($this->serviceReports as $item) {
                    $res['serviceReports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serviceTimeRange) {
            $res['serviceTimeRange'] = $this->serviceTimeRange;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->statusCode) {
            $res['statusCode'] = $this->statusCode;
        }
        if (null !== $this->statusStr) {
            $res['statusStr'] = $this->statusStr;
        }
        if (null !== $this->termOfValidity) {
            $res['termOfValidity'] = $this->termOfValidity;
        }
        if (null !== $this->totalPack) {
            $res['totalPack'] = $this->totalPack;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->usePack) {
            $res['usePack'] = $this->usePack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applierId'])) {
            $model->applierId = $map['applierId'];
        }
        if (isset($map['applyCode'])) {
            $model->applyCode = $map['applyCode'];
        }
        if (isset($map['applyTime'])) {
            $model->applyTime = $map['applyTime'];
        }
        if (isset($map['appointments'])) {
            if (!empty($map['appointments'])) {
                $model->appointments = [];
                $n                   = 0;
                foreach ($map['appointments'] as $item) {
                    $model->appointments[$n++] = null !== $item ? appointments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['buyUrl'])) {
            $model->buyUrl = $map['buyUrl'];
        }
        if (isset($map['creatorEmpId'])) {
            $model->creatorEmpId = $map['creatorEmpId'];
        }
        if (isset($map['customerName'])) {
            $model->customerName = $map['customerName'];
        }
        if (isset($map['cycleService'])) {
            $model->cycleService = $map['cycleService'];
        }
        if (isset($map['executedCount'])) {
            $model->executedCount = $map['executedCount'];
        }
        if (isset($map['finishCount'])) {
            $model->finishCount = $map['finishCount'];
        }
        if (isset($map['formMap'])) {
            $model->formMap = $map['formMap'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['mergeSolutionAndReporterOneStep'])) {
            $model->mergeSolutionAndReporterOneStep = $map['mergeSolutionAndReporterOneStep'];
        }
        if (isset($map['modifierEmpId'])) {
            $model->modifierEmpId = $map['modifierEmpId'];
        }
        if (isset($map['packDetails'])) {
            if (!empty($map['packDetails'])) {
                $model->packDetails = $map['packDetails'];
            }
        }
        if (isset($map['payOrders'])) {
            if (!empty($map['payOrders'])) {
                $model->payOrders = [];
                $n                = 0;
                foreach ($map['payOrders'] as $item) {
                    $model->payOrders[$n++] = null !== $item ? payOrders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['payUrl'])) {
            $model->payUrl = $map['payUrl'];
        }
        if (isset($map['performanceOrders'])) {
            if (!empty($map['performanceOrders'])) {
                $model->performanceOrders = [];
                $n                        = 0;
                foreach ($map['performanceOrders'] as $item) {
                    $model->performanceOrders[$n++] = null !== $item ? performanceOrders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['performancePacks'])) {
            if (!empty($map['performancePacks'])) {
                $model->performancePacks = [];
                $n                       = 0;
                foreach ($map['performancePacks'] as $item) {
                    $model->performancePacks[$n++] = null !== $item ? performancePacks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['reneWalUrl'])) {
            $model->reneWalUrl = $map['reneWalUrl'];
        }
        if (isset($map['serviceCode'])) {
            $model->serviceCode = $map['serviceCode'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['serviceReports'])) {
            if (!empty($map['serviceReports'])) {
                $model->serviceReports = [];
                $n                     = 0;
                foreach ($map['serviceReports'] as $item) {
                    $model->serviceReports[$n++] = null !== $item ? serviceReports::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['serviceTimeRange'])) {
            if (!empty($map['serviceTimeRange'])) {
                $model->serviceTimeRange = $map['serviceTimeRange'];
            }
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['statusCode'])) {
            $model->statusCode = $map['statusCode'];
        }
        if (isset($map['statusStr'])) {
            $model->statusStr = $map['statusStr'];
        }
        if (isset($map['termOfValidity'])) {
            $model->termOfValidity = $map['termOfValidity'];
        }
        if (isset($map['totalPack'])) {
            $model->totalPack = $map['totalPack'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['usePack'])) {
            $model->usePack = $map['usePack'];
        }

        return $model;
    }
}
