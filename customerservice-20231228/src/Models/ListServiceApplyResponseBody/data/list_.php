<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\appointments;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\payOrders;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performancePacks;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\serviceReports;

class list_ extends Model
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
     * @var string[][]
     */
    public $applyComponentDetails;

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
    public $isOneToOneExpertServiceByTime;

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

    /**
     * @var string
     */
    public $userRights;
    protected $_name = [
        'applierId' => 'applierId',
        'applyCode' => 'applyCode',
        'applyComponentDetails' => 'applyComponentDetails',
        'applyTime' => 'applyTime',
        'appointments' => 'appointments',
        'buyUrl' => 'buyUrl',
        'creatorEmpId' => 'creatorEmpId',
        'customerName' => 'customerName',
        'cycleService' => 'cycleService',
        'executedCount' => 'executedCount',
        'finishCount' => 'finishCount',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'isOneToOneExpertServiceByTime' => 'isOneToOneExpertServiceByTime',
        'mergeSolutionAndReporterOneStep' => 'mergeSolutionAndReporterOneStep',
        'modifierEmpId' => 'modifierEmpId',
        'packDetails' => 'packDetails',
        'payOrders' => 'payOrders',
        'payUrl' => 'payUrl',
        'performanceOrders' => 'performanceOrders',
        'performancePacks' => 'performancePacks',
        'reneWalUrl' => 'reneWalUrl',
        'serviceCode' => 'serviceCode',
        'serviceName' => 'serviceName',
        'serviceReports' => 'serviceReports',
        'serviceTimeRange' => 'serviceTimeRange',
        'status' => 'status',
        'statusCode' => 'statusCode',
        'statusStr' => 'statusStr',
        'termOfValidity' => 'termOfValidity',
        'totalPack' => 'totalPack',
        'type' => 'type',
        'usePack' => 'usePack',
        'userRights' => 'userRights',
    ];

    public function validate()
    {
        if (\is_array($this->applyComponentDetails)) {
            Model::validateArray($this->applyComponentDetails);
        }
        if (\is_array($this->appointments)) {
            Model::validateArray($this->appointments);
        }
        if (\is_array($this->packDetails)) {
            Model::validateArray($this->packDetails);
        }
        if (\is_array($this->payOrders)) {
            Model::validateArray($this->payOrders);
        }
        if (\is_array($this->performanceOrders)) {
            Model::validateArray($this->performanceOrders);
        }
        if (\is_array($this->performancePacks)) {
            Model::validateArray($this->performancePacks);
        }
        if (\is_array($this->serviceReports)) {
            Model::validateArray($this->serviceReports);
        }
        if (\is_array($this->serviceTimeRange)) {
            Model::validateArray($this->serviceTimeRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applierId) {
            $res['applierId'] = $this->applierId;
        }

        if (null !== $this->applyCode) {
            $res['applyCode'] = $this->applyCode;
        }

        if (null !== $this->applyComponentDetails) {
            if (\is_array($this->applyComponentDetails)) {
                $res['applyComponentDetails'] = [];
                $n1 = 0;
                foreach ($this->applyComponentDetails as $item1) {
                    if (\is_array($item1)) {
                        $res['applyComponentDetails'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['applyComponentDetails'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->applyTime) {
            $res['applyTime'] = $this->applyTime;
        }

        if (null !== $this->appointments) {
            if (\is_array($this->appointments)) {
                $res['appointments'] = [];
                $n1 = 0;
                foreach ($this->appointments as $item1) {
                    $res['appointments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isOneToOneExpertServiceByTime) {
            $res['isOneToOneExpertServiceByTime'] = $this->isOneToOneExpertServiceByTime;
        }

        if (null !== $this->mergeSolutionAndReporterOneStep) {
            $res['mergeSolutionAndReporterOneStep'] = $this->mergeSolutionAndReporterOneStep;
        }

        if (null !== $this->modifierEmpId) {
            $res['modifierEmpId'] = $this->modifierEmpId;
        }

        if (null !== $this->packDetails) {
            if (\is_array($this->packDetails)) {
                $res['packDetails'] = [];
                $n1 = 0;
                foreach ($this->packDetails as $item1) {
                    if (\is_array($item1)) {
                        $res['packDetails'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['packDetails'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->payOrders) {
            if (\is_array($this->payOrders)) {
                $res['payOrders'] = [];
                $n1 = 0;
                foreach ($this->payOrders as $item1) {
                    $res['payOrders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->payUrl) {
            $res['payUrl'] = $this->payUrl;
        }

        if (null !== $this->performanceOrders) {
            if (\is_array($this->performanceOrders)) {
                $res['performanceOrders'] = [];
                $n1 = 0;
                foreach ($this->performanceOrders as $item1) {
                    $res['performanceOrders'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->performancePacks) {
            if (\is_array($this->performancePacks)) {
                $res['performancePacks'] = [];
                $n1 = 0;
                foreach ($this->performancePacks as $item1) {
                    $res['performancePacks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->serviceReports)) {
                $res['serviceReports'] = [];
                $n1 = 0;
                foreach ($this->serviceReports as $item1) {
                    $res['serviceReports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceTimeRange) {
            if (\is_array($this->serviceTimeRange)) {
                $res['serviceTimeRange'] = [];
                $n1 = 0;
                foreach ($this->serviceTimeRange as $item1) {
                    $res['serviceTimeRange'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->userRights) {
            $res['userRights'] = $this->userRights;
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
        if (isset($map['applierId'])) {
            $model->applierId = $map['applierId'];
        }

        if (isset($map['applyCode'])) {
            $model->applyCode = $map['applyCode'];
        }

        if (isset($map['applyComponentDetails'])) {
            if (!empty($map['applyComponentDetails'])) {
                $model->applyComponentDetails = [];
                $n1 = 0;
                foreach ($map['applyComponentDetails'] as $item1) {
                    if (!empty($item1)) {
                        $model->applyComponentDetails[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->applyComponentDetails[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['applyTime'])) {
            $model->applyTime = $map['applyTime'];
        }

        if (isset($map['appointments'])) {
            if (!empty($map['appointments'])) {
                $model->appointments = [];
                $n1 = 0;
                foreach ($map['appointments'] as $item1) {
                    $model->appointments[$n1] = appointments::fromMap($item1);
                    ++$n1;
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

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isOneToOneExpertServiceByTime'])) {
            $model->isOneToOneExpertServiceByTime = $map['isOneToOneExpertServiceByTime'];
        }

        if (isset($map['mergeSolutionAndReporterOneStep'])) {
            $model->mergeSolutionAndReporterOneStep = $map['mergeSolutionAndReporterOneStep'];
        }

        if (isset($map['modifierEmpId'])) {
            $model->modifierEmpId = $map['modifierEmpId'];
        }

        if (isset($map['packDetails'])) {
            if (!empty($map['packDetails'])) {
                $model->packDetails = [];
                $n1 = 0;
                foreach ($map['packDetails'] as $item1) {
                    if (!empty($item1)) {
                        $model->packDetails[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->packDetails[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['payOrders'])) {
            if (!empty($map['payOrders'])) {
                $model->payOrders = [];
                $n1 = 0;
                foreach ($map['payOrders'] as $item1) {
                    $model->payOrders[$n1] = payOrders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['payUrl'])) {
            $model->payUrl = $map['payUrl'];
        }

        if (isset($map['performanceOrders'])) {
            if (!empty($map['performanceOrders'])) {
                $model->performanceOrders = [];
                $n1 = 0;
                foreach ($map['performanceOrders'] as $item1) {
                    $model->performanceOrders[$n1] = performanceOrders::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['performancePacks'])) {
            if (!empty($map['performancePacks'])) {
                $model->performancePacks = [];
                $n1 = 0;
                foreach ($map['performancePacks'] as $item1) {
                    $model->performancePacks[$n1] = performancePacks::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['serviceReports'] as $item1) {
                    $model->serviceReports[$n1] = serviceReports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['serviceTimeRange'])) {
            if (!empty($map['serviceTimeRange'])) {
                $model->serviceTimeRange = [];
                $n1 = 0;
                foreach ($map['serviceTimeRange'] as $item1) {
                    $model->serviceTimeRange[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['userRights'])) {
            $model->userRights = $map['userRights'];
        }

        return $model;
    }
}
