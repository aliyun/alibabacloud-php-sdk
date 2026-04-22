<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEapDeviceResourceAllocationResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var float
     */
    public $headAcu;

    /**
     * @var int
     */
    public $headCpu;

    /**
     * @var string
     */
    public $headSpecName;

    /**
     * @var float
     */
    public $totalAcu;

    /**
     * @var int
     */
    public $totalDeployedCpu;

    /**
     * @var int
     */
    public $totalTargetCpu;

    /**
     * @var float
     */
    public $webserverAcu;

    /**
     * @var int
     */
    public $webserverCpu;

    /**
     * @var string
     */
    public $webserverSpecName;

    /**
     * @var float
     */
    public $workerAcu;

    /**
     * @var int
     */
    public $workerCount;

    /**
     * @var int
     */
    public $workerCpu;

    /**
     * @var string
     */
    public $workerSpecName;
    protected $_name = [
        'deviceCount' => 'DeviceCount',
        'headAcu' => 'HeadAcu',
        'headCpu' => 'HeadCpu',
        'headSpecName' => 'HeadSpecName',
        'totalAcu' => 'TotalAcu',
        'totalDeployedCpu' => 'TotalDeployedCpu',
        'totalTargetCpu' => 'TotalTargetCpu',
        'webserverAcu' => 'WebserverAcu',
        'webserverCpu' => 'WebserverCpu',
        'webserverSpecName' => 'WebserverSpecName',
        'workerAcu' => 'WorkerAcu',
        'workerCount' => 'WorkerCount',
        'workerCpu' => 'WorkerCpu',
        'workerSpecName' => 'WorkerSpecName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }

        if (null !== $this->headAcu) {
            $res['HeadAcu'] = $this->headAcu;
        }

        if (null !== $this->headCpu) {
            $res['HeadCpu'] = $this->headCpu;
        }

        if (null !== $this->headSpecName) {
            $res['HeadSpecName'] = $this->headSpecName;
        }

        if (null !== $this->totalAcu) {
            $res['TotalAcu'] = $this->totalAcu;
        }

        if (null !== $this->totalDeployedCpu) {
            $res['TotalDeployedCpu'] = $this->totalDeployedCpu;
        }

        if (null !== $this->totalTargetCpu) {
            $res['TotalTargetCpu'] = $this->totalTargetCpu;
        }

        if (null !== $this->webserverAcu) {
            $res['WebserverAcu'] = $this->webserverAcu;
        }

        if (null !== $this->webserverCpu) {
            $res['WebserverCpu'] = $this->webserverCpu;
        }

        if (null !== $this->webserverSpecName) {
            $res['WebserverSpecName'] = $this->webserverSpecName;
        }

        if (null !== $this->workerAcu) {
            $res['WorkerAcu'] = $this->workerAcu;
        }

        if (null !== $this->workerCount) {
            $res['WorkerCount'] = $this->workerCount;
        }

        if (null !== $this->workerCpu) {
            $res['WorkerCpu'] = $this->workerCpu;
        }

        if (null !== $this->workerSpecName) {
            $res['WorkerSpecName'] = $this->workerSpecName;
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
        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }

        if (isset($map['HeadAcu'])) {
            $model->headAcu = $map['HeadAcu'];
        }

        if (isset($map['HeadCpu'])) {
            $model->headCpu = $map['HeadCpu'];
        }

        if (isset($map['HeadSpecName'])) {
            $model->headSpecName = $map['HeadSpecName'];
        }

        if (isset($map['TotalAcu'])) {
            $model->totalAcu = $map['TotalAcu'];
        }

        if (isset($map['TotalDeployedCpu'])) {
            $model->totalDeployedCpu = $map['TotalDeployedCpu'];
        }

        if (isset($map['TotalTargetCpu'])) {
            $model->totalTargetCpu = $map['TotalTargetCpu'];
        }

        if (isset($map['WebserverAcu'])) {
            $model->webserverAcu = $map['WebserverAcu'];
        }

        if (isset($map['WebserverCpu'])) {
            $model->webserverCpu = $map['WebserverCpu'];
        }

        if (isset($map['WebserverSpecName'])) {
            $model->webserverSpecName = $map['WebserverSpecName'];
        }

        if (isset($map['WorkerAcu'])) {
            $model->workerAcu = $map['WorkerAcu'];
        }

        if (isset($map['WorkerCount'])) {
            $model->workerCount = $map['WorkerCount'];
        }

        if (isset($map['WorkerCpu'])) {
            $model->workerCpu = $map['WorkerCpu'];
        }

        if (isset($map['WorkerSpecName'])) {
            $model->workerSpecName = $map['WorkerSpecName'];
        }

        return $model;
    }
}
