<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\applyFileVOList;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\extList;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\performanceNodeDTOS;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\performancePacks;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\serviceMonthReports;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\serviceReports;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\serviceSchemes;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\ListServiceApplyResponseBody\data\list_\performanceOrders\tamEngineers;

class performanceOrders extends Model
{
    /**
     * @var applyFileVOList[]
     */
    public $applyFileVOList;

    /**
     * @var string
     */
    public $appointmentCode;

    /**
     * @var int
     */
    public $appointmentEndTime;

    /**
     * @var string
     */
    public $appointmentId;

    /**
     * @var int
     */
    public $appointmentPassTime;

    /**
     * @var int
     */
    public $appointmentTime;

    /**
     * @var string
     */
    public $commodityDesc;

    /**
     * @var string
     */
    public $creatorEmpId;

    /**
     * @var bool
     */
    public $cycleService;

    /**
     * @var extList[]
     */
    public $extList;

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
     * @var string
     */
    public $ntmCommodityCode;

    /**
     * @var mixed
     */
    public $orderDetail;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $packCount;

    /**
     * @var mixed[][]
     */
    public $packDetails;

    /**
     * @var performanceNodeDTOS[]
     */
    public $performanceNodeDTOS;

    /**
     * @var performancePacks[]
     */
    public $performancePacks;

    /**
     * @var int
     */
    public $purchasePackCode;

    /**
     * @var int
     */
    public $serviceApplyId;

    /**
     * @var serviceMonthReports[]
     */
    public $serviceMonthReports;

    /**
     * @var serviceReports[]
     */
    public $serviceReports;

    /**
     * @var serviceSchemes[]
     */
    public $serviceSchemes;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusStr;

    /**
     * @var int[]
     */
    public $supportTime;

    /**
     * @var tamEngineers[]
     */
    public $tamEngineers;
    protected $_name = [
        'applyFileVOList' => 'applyFileVOList',
        'appointmentCode' => 'appointmentCode',
        'appointmentEndTime' => 'appointmentEndTime',
        'appointmentId' => 'appointmentId',
        'appointmentPassTime' => 'appointmentPassTime',
        'appointmentTime' => 'appointmentTime',
        'commodityDesc' => 'commodityDesc',
        'creatorEmpId' => 'creatorEmpId',
        'cycleService' => 'cycleService',
        'extList' => 'extList',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'mergeSolutionAndReporterOneStep' => 'mergeSolutionAndReporterOneStep',
        'modifierEmpId' => 'modifierEmpId',
        'ntmCommodityCode' => 'ntmCommodityCode',
        'orderDetail' => 'orderDetail',
        'orderId' => 'orderId',
        'packCount' => 'packCount',
        'packDetails' => 'packDetails',
        'performanceNodeDTOS' => 'performanceNodeDTOS',
        'performancePacks' => 'performancePacks',
        'purchasePackCode' => 'purchasePackCode',
        'serviceApplyId' => 'serviceApplyId',
        'serviceMonthReports' => 'serviceMonthReports',
        'serviceReports' => 'serviceReports',
        'serviceSchemes' => 'serviceSchemes',
        'status' => 'status',
        'statusStr' => 'statusStr',
        'supportTime' => 'supportTime',
        'tamEngineers' => 'tamEngineers',
    ];

    public function validate()
    {
        if (\is_array($this->applyFileVOList)) {
            Model::validateArray($this->applyFileVOList);
        }
        if (\is_array($this->extList)) {
            Model::validateArray($this->extList);
        }
        if (\is_array($this->packDetails)) {
            Model::validateArray($this->packDetails);
        }
        if (\is_array($this->performanceNodeDTOS)) {
            Model::validateArray($this->performanceNodeDTOS);
        }
        if (\is_array($this->performancePacks)) {
            Model::validateArray($this->performancePacks);
        }
        if (\is_array($this->serviceMonthReports)) {
            Model::validateArray($this->serviceMonthReports);
        }
        if (\is_array($this->serviceReports)) {
            Model::validateArray($this->serviceReports);
        }
        if (\is_array($this->serviceSchemes)) {
            Model::validateArray($this->serviceSchemes);
        }
        if (\is_array($this->supportTime)) {
            Model::validateArray($this->supportTime);
        }
        if (\is_array($this->tamEngineers)) {
            Model::validateArray($this->tamEngineers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyFileVOList) {
            if (\is_array($this->applyFileVOList)) {
                $res['applyFileVOList'] = [];
                $n1 = 0;
                foreach ($this->applyFileVOList as $item1) {
                    $res['applyFileVOList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->appointmentCode) {
            $res['appointmentCode'] = $this->appointmentCode;
        }

        if (null !== $this->appointmentEndTime) {
            $res['appointmentEndTime'] = $this->appointmentEndTime;
        }

        if (null !== $this->appointmentId) {
            $res['appointmentId'] = $this->appointmentId;
        }

        if (null !== $this->appointmentPassTime) {
            $res['appointmentPassTime'] = $this->appointmentPassTime;
        }

        if (null !== $this->appointmentTime) {
            $res['appointmentTime'] = $this->appointmentTime;
        }

        if (null !== $this->commodityDesc) {
            $res['commodityDesc'] = $this->commodityDesc;
        }

        if (null !== $this->creatorEmpId) {
            $res['creatorEmpId'] = $this->creatorEmpId;
        }

        if (null !== $this->cycleService) {
            $res['cycleService'] = $this->cycleService;
        }

        if (null !== $this->extList) {
            if (\is_array($this->extList)) {
                $res['extList'] = [];
                $n1 = 0;
                foreach ($this->extList as $item1) {
                    $res['extList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->ntmCommodityCode) {
            $res['ntmCommodityCode'] = $this->ntmCommodityCode;
        }

        if (null !== $this->orderDetail) {
            $res['orderDetail'] = $this->orderDetail;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->packCount) {
            $res['packCount'] = $this->packCount;
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

        if (null !== $this->performanceNodeDTOS) {
            if (\is_array($this->performanceNodeDTOS)) {
                $res['performanceNodeDTOS'] = [];
                $n1 = 0;
                foreach ($this->performanceNodeDTOS as $item1) {
                    $res['performanceNodeDTOS'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->purchasePackCode) {
            $res['purchasePackCode'] = $this->purchasePackCode;
        }

        if (null !== $this->serviceApplyId) {
            $res['serviceApplyId'] = $this->serviceApplyId;
        }

        if (null !== $this->serviceMonthReports) {
            if (\is_array($this->serviceMonthReports)) {
                $res['serviceMonthReports'] = [];
                $n1 = 0;
                foreach ($this->serviceMonthReports as $item1) {
                    $res['serviceMonthReports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->serviceSchemes) {
            if (\is_array($this->serviceSchemes)) {
                $res['serviceSchemes'] = [];
                $n1 = 0;
                foreach ($this->serviceSchemes as $item1) {
                    $res['serviceSchemes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusStr) {
            $res['statusStr'] = $this->statusStr;
        }

        if (null !== $this->supportTime) {
            if (\is_array($this->supportTime)) {
                $res['supportTime'] = [];
                $n1 = 0;
                foreach ($this->supportTime as $item1) {
                    $res['supportTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tamEngineers) {
            if (\is_array($this->tamEngineers)) {
                $res['tamEngineers'] = [];
                $n1 = 0;
                foreach ($this->tamEngineers as $item1) {
                    $res['tamEngineers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['applyFileVOList'])) {
            if (!empty($map['applyFileVOList'])) {
                $model->applyFileVOList = [];
                $n1 = 0;
                foreach ($map['applyFileVOList'] as $item1) {
                    $model->applyFileVOList[$n1] = applyFileVOList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['appointmentCode'])) {
            $model->appointmentCode = $map['appointmentCode'];
        }

        if (isset($map['appointmentEndTime'])) {
            $model->appointmentEndTime = $map['appointmentEndTime'];
        }

        if (isset($map['appointmentId'])) {
            $model->appointmentId = $map['appointmentId'];
        }

        if (isset($map['appointmentPassTime'])) {
            $model->appointmentPassTime = $map['appointmentPassTime'];
        }

        if (isset($map['appointmentTime'])) {
            $model->appointmentTime = $map['appointmentTime'];
        }

        if (isset($map['commodityDesc'])) {
            $model->commodityDesc = $map['commodityDesc'];
        }

        if (isset($map['creatorEmpId'])) {
            $model->creatorEmpId = $map['creatorEmpId'];
        }

        if (isset($map['cycleService'])) {
            $model->cycleService = $map['cycleService'];
        }

        if (isset($map['extList'])) {
            if (!empty($map['extList'])) {
                $model->extList = [];
                $n1 = 0;
                foreach ($map['extList'] as $item1) {
                    $model->extList[$n1] = extList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['ntmCommodityCode'])) {
            $model->ntmCommodityCode = $map['ntmCommodityCode'];
        }

        if (isset($map['orderDetail'])) {
            $model->orderDetail = $map['orderDetail'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['packCount'])) {
            $model->packCount = $map['packCount'];
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

        if (isset($map['performanceNodeDTOS'])) {
            if (!empty($map['performanceNodeDTOS'])) {
                $model->performanceNodeDTOS = [];
                $n1 = 0;
                foreach ($map['performanceNodeDTOS'] as $item1) {
                    $model->performanceNodeDTOS[$n1] = performanceNodeDTOS::fromMap($item1);
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

        if (isset($map['purchasePackCode'])) {
            $model->purchasePackCode = $map['purchasePackCode'];
        }

        if (isset($map['serviceApplyId'])) {
            $model->serviceApplyId = $map['serviceApplyId'];
        }

        if (isset($map['serviceMonthReports'])) {
            if (!empty($map['serviceMonthReports'])) {
                $model->serviceMonthReports = [];
                $n1 = 0;
                foreach ($map['serviceMonthReports'] as $item1) {
                    $model->serviceMonthReports[$n1] = serviceMonthReports::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['serviceSchemes'])) {
            if (!empty($map['serviceSchemes'])) {
                $model->serviceSchemes = [];
                $n1 = 0;
                foreach ($map['serviceSchemes'] as $item1) {
                    $model->serviceSchemes[$n1] = serviceSchemes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusStr'])) {
            $model->statusStr = $map['statusStr'];
        }

        if (isset($map['supportTime'])) {
            if (!empty($map['supportTime'])) {
                $model->supportTime = [];
                $n1 = 0;
                foreach ($map['supportTime'] as $item1) {
                    $model->supportTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tamEngineers'])) {
            if (!empty($map['tamEngineers'])) {
                $model->tamEngineers = [];
                $n1 = 0;
                foreach ($map['tamEngineers'] as $item1) {
                    $model->tamEngineers[$n1] = tamEngineers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
