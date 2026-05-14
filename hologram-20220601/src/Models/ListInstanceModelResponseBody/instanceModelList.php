<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListInstanceModelResponseBody;

use AlibabaCloud\Dara\Model;

class instanceModelList extends Model
{
    /**
     * @var string
     */
    public $aiInstanceId;

    /**
     * @var string
     */
    public $aiSpec;

    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $cpuUsed;

    /**
     * @var string
     */
    public $expirationTime;

    /**
     * @var int
     */
    public $gpu;

    /**
     * @var int
     */
    public $gpuMemory;

    /**
     * @var int
     */
    public $gpuMemoryUsed;

    /**
     * @var int
     */
    public $gpuUsed;

    /**
     * @var string
     */
    public $holoInstanceId;

    /**
     * @var string
     */
    public $holoInstanceName;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $memoryUsed;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aiInstanceId' => 'aiInstanceId',
        'aiSpec' => 'aiSpec',
        'autoRenewal' => 'autoRenewal',
        'chargeType' => 'chargeType',
        'commodityCode' => 'commodityCode',
        'cpu' => 'cpu',
        'cpuUsed' => 'cpuUsed',
        'expirationTime' => 'expirationTime',
        'gpu' => 'gpu',
        'gpuMemory' => 'gpuMemory',
        'gpuMemoryUsed' => 'gpuMemoryUsed',
        'gpuUsed' => 'gpuUsed',
        'holoInstanceId' => 'holoInstanceId',
        'holoInstanceName' => 'holoInstanceName',
        'memory' => 'memory',
        'memoryUsed' => 'memoryUsed',
        'nodeCount' => 'nodeCount',
        'regionId' => 'regionId',
        'resourceType' => 'resourceType',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiInstanceId) {
            $res['aiInstanceId'] = $this->aiInstanceId;
        }

        if (null !== $this->aiSpec) {
            $res['aiSpec'] = $this->aiSpec;
        }

        if (null !== $this->autoRenewal) {
            $res['autoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->chargeType) {
            $res['chargeType'] = $this->chargeType;
        }

        if (null !== $this->commodityCode) {
            $res['commodityCode'] = $this->commodityCode;
        }

        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }

        if (null !== $this->cpuUsed) {
            $res['cpuUsed'] = $this->cpuUsed;
        }

        if (null !== $this->expirationTime) {
            $res['expirationTime'] = $this->expirationTime;
        }

        if (null !== $this->gpu) {
            $res['gpu'] = $this->gpu;
        }

        if (null !== $this->gpuMemory) {
            $res['gpuMemory'] = $this->gpuMemory;
        }

        if (null !== $this->gpuMemoryUsed) {
            $res['gpuMemoryUsed'] = $this->gpuMemoryUsed;
        }

        if (null !== $this->gpuUsed) {
            $res['gpuUsed'] = $this->gpuUsed;
        }

        if (null !== $this->holoInstanceId) {
            $res['holoInstanceId'] = $this->holoInstanceId;
        }

        if (null !== $this->holoInstanceName) {
            $res['holoInstanceName'] = $this->holoInstanceName;
        }

        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->memoryUsed) {
            $res['memoryUsed'] = $this->memoryUsed;
        }

        if (null !== $this->nodeCount) {
            $res['nodeCount'] = $this->nodeCount;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['aiInstanceId'])) {
            $model->aiInstanceId = $map['aiInstanceId'];
        }

        if (isset($map['aiSpec'])) {
            $model->aiSpec = $map['aiSpec'];
        }

        if (isset($map['autoRenewal'])) {
            $model->autoRenewal = $map['autoRenewal'];
        }

        if (isset($map['chargeType'])) {
            $model->chargeType = $map['chargeType'];
        }

        if (isset($map['commodityCode'])) {
            $model->commodityCode = $map['commodityCode'];
        }

        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }

        if (isset($map['cpuUsed'])) {
            $model->cpuUsed = $map['cpuUsed'];
        }

        if (isset($map['expirationTime'])) {
            $model->expirationTime = $map['expirationTime'];
        }

        if (isset($map['gpu'])) {
            $model->gpu = $map['gpu'];
        }

        if (isset($map['gpuMemory'])) {
            $model->gpuMemory = $map['gpuMemory'];
        }

        if (isset($map['gpuMemoryUsed'])) {
            $model->gpuMemoryUsed = $map['gpuMemoryUsed'];
        }

        if (isset($map['gpuUsed'])) {
            $model->gpuUsed = $map['gpuUsed'];
        }

        if (isset($map['holoInstanceId'])) {
            $model->holoInstanceId = $map['holoInstanceId'];
        }

        if (isset($map['holoInstanceName'])) {
            $model->holoInstanceName = $map['holoInstanceName'];
        }

        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['memoryUsed'])) {
            $model->memoryUsed = $map['memoryUsed'];
        }

        if (isset($map['nodeCount'])) {
            $model->nodeCount = $map['nodeCount'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
