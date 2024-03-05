<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders;

use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks\applyFileVOList;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks\extList;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks\performanceNodeDTOS;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks\serviceMonthReports;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks\serviceReports;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks\serviceSchemes;
use AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks\tamEngineers;
use AlibabaCloud\Tea\Model;

class performancePacks extends Model
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
     * @var mixed
     */
    public $orderDetail;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var performanceNodeDTOS[]
     */
    public $performanceNodeDTOS;

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
        'applyFileVOList'                 => 'applyFileVOList',
        'appointmentCode'                 => 'appointmentCode',
        'appointmentEndTime'              => 'appointmentEndTime',
        'appointmentId'                   => 'appointmentId',
        'appointmentPassTime'             => 'appointmentPassTime',
        'appointmentTime'                 => 'appointmentTime',
        'commodityDesc'                   => 'commodityDesc',
        'creatorEmpId'                    => 'creatorEmpId',
        'cycleService'                    => 'cycleService',
        'extList'                         => 'extList',
        'gmtCreate'                       => 'gmtCreate',
        'gmtModified'                     => 'gmtModified',
        'id'                              => 'id',
        'mergeSolutionAndReporterOneStep' => 'mergeSolutionAndReporterOneStep',
        'modifierEmpId'                   => 'modifierEmpId',
        'orderDetail'                     => 'orderDetail',
        'orderId'                         => 'orderId',
        'performanceNodeDTOS'             => 'performanceNodeDTOS',
        'purchasePackCode'                => 'purchasePackCode',
        'serviceApplyId'                  => 'serviceApplyId',
        'serviceMonthReports'             => 'serviceMonthReports',
        'serviceReports'                  => 'serviceReports',
        'serviceSchemes'                  => 'serviceSchemes',
        'status'                          => 'status',
        'statusStr'                       => 'statusStr',
        'supportTime'                     => 'supportTime',
        'tamEngineers'                    => 'tamEngineers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyFileVOList) {
            $res['applyFileVOList'] = [];
            if (null !== $this->applyFileVOList && \is_array($this->applyFileVOList)) {
                $n = 0;
                foreach ($this->applyFileVOList as $item) {
                    $res['applyFileVOList'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['extList'] = [];
            if (null !== $this->extList && \is_array($this->extList)) {
                $n = 0;
                foreach ($this->extList as $item) {
                    $res['extList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->orderDetail) {
            $res['orderDetail'] = $this->orderDetail;
        }
        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }
        if (null !== $this->performanceNodeDTOS) {
            $res['performanceNodeDTOS'] = [];
            if (null !== $this->performanceNodeDTOS && \is_array($this->performanceNodeDTOS)) {
                $n = 0;
                foreach ($this->performanceNodeDTOS as $item) {
                    $res['performanceNodeDTOS'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['serviceMonthReports'] = [];
            if (null !== $this->serviceMonthReports && \is_array($this->serviceMonthReports)) {
                $n = 0;
                foreach ($this->serviceMonthReports as $item) {
                    $res['serviceMonthReports'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->serviceSchemes) {
            $res['serviceSchemes'] = [];
            if (null !== $this->serviceSchemes && \is_array($this->serviceSchemes)) {
                $n = 0;
                foreach ($this->serviceSchemes as $item) {
                    $res['serviceSchemes'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['supportTime'] = $this->supportTime;
        }
        if (null !== $this->tamEngineers) {
            $res['tamEngineers'] = [];
            if (null !== $this->tamEngineers && \is_array($this->tamEngineers)) {
                $n = 0;
                foreach ($this->tamEngineers as $item) {
                    $res['tamEngineers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return performancePacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applyFileVOList'])) {
            if (!empty($map['applyFileVOList'])) {
                $model->applyFileVOList = [];
                $n                      = 0;
                foreach ($map['applyFileVOList'] as $item) {
                    $model->applyFileVOList[$n++] = null !== $item ? applyFileVOList::fromMap($item) : $item;
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
                $n              = 0;
                foreach ($map['extList'] as $item) {
                    $model->extList[$n++] = null !== $item ? extList::fromMap($item) : $item;
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
        if (isset($map['orderDetail'])) {
            $model->orderDetail = $map['orderDetail'];
        }
        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }
        if (isset($map['performanceNodeDTOS'])) {
            if (!empty($map['performanceNodeDTOS'])) {
                $model->performanceNodeDTOS = [];
                $n                          = 0;
                foreach ($map['performanceNodeDTOS'] as $item) {
                    $model->performanceNodeDTOS[$n++] = null !== $item ? performanceNodeDTOS::fromMap($item) : $item;
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
                $n                          = 0;
                foreach ($map['serviceMonthReports'] as $item) {
                    $model->serviceMonthReports[$n++] = null !== $item ? serviceMonthReports::fromMap($item) : $item;
                }
            }
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
        if (isset($map['serviceSchemes'])) {
            if (!empty($map['serviceSchemes'])) {
                $model->serviceSchemes = [];
                $n                     = 0;
                foreach ($map['serviceSchemes'] as $item) {
                    $model->serviceSchemes[$n++] = null !== $item ? serviceSchemes::fromMap($item) : $item;
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
                $model->supportTime = $map['supportTime'];
            }
        }
        if (isset($map['tamEngineers'])) {
            if (!empty($map['tamEngineers'])) {
                $model->tamEngineers = [];
                $n                   = 0;
                foreach ($map['tamEngineers'] as $item) {
                    $model->tamEngineers[$n++] = null !== $item ? tamEngineers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
