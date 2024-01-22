<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class StaticsInfo extends Model
{
    /**
     * @var int
     */
    public $activeCPUUsage;

    /**
     * @var float
     */
    public $cost;

    /**
     * @var int
     */
    public $diskUsage;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var int
     */
    public $gpuUsage;

    /**
     * @var int
     */
    public $idleCPUUsage;

    /**
     * @var int
     */
    public $instanceTrafficOut;

    /**
     * @var int
     */
    public $invocations;

    /**
     * @var int
     */
    public $invokeCDNOut;

    /**
     * @var int
     */
    public $invokeInternetOut;

    /**
     * @var int
     */
    public $memoryUsage;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'activeCPUUsage'     => 'activeCPUUsage',
        'cost'               => 'cost',
        'diskUsage'          => 'diskUsage',
        'functionName'       => 'functionName',
        'gpuUsage'           => 'gpuUsage',
        'idleCPUUsage'       => 'idleCPUUsage',
        'instanceTrafficOut' => 'instanceTrafficOut',
        'invocations'        => 'invocations',
        'invokeCDNOut'       => 'invokeCDNOut',
        'invokeInternetOut'  => 'invokeInternetOut',
        'memoryUsage'        => 'memoryUsage',
        'region'             => 'region',
        'serviceName'        => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCPUUsage) {
            $res['activeCPUUsage'] = $this->activeCPUUsage;
        }
        if (null !== $this->cost) {
            $res['cost'] = $this->cost;
        }
        if (null !== $this->diskUsage) {
            $res['diskUsage'] = $this->diskUsage;
        }
        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }
        if (null !== $this->gpuUsage) {
            $res['gpuUsage'] = $this->gpuUsage;
        }
        if (null !== $this->idleCPUUsage) {
            $res['idleCPUUsage'] = $this->idleCPUUsage;
        }
        if (null !== $this->instanceTrafficOut) {
            $res['instanceTrafficOut'] = $this->instanceTrafficOut;
        }
        if (null !== $this->invocations) {
            $res['invocations'] = $this->invocations;
        }
        if (null !== $this->invokeCDNOut) {
            $res['invokeCDNOut'] = $this->invokeCDNOut;
        }
        if (null !== $this->invokeInternetOut) {
            $res['invokeInternetOut'] = $this->invokeInternetOut;
        }
        if (null !== $this->memoryUsage) {
            $res['memoryUsage'] = $this->memoryUsage;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StaticsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activeCPUUsage'])) {
            $model->activeCPUUsage = $map['activeCPUUsage'];
        }
        if (isset($map['cost'])) {
            $model->cost = $map['cost'];
        }
        if (isset($map['diskUsage'])) {
            $model->diskUsage = $map['diskUsage'];
        }
        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }
        if (isset($map['gpuUsage'])) {
            $model->gpuUsage = $map['gpuUsage'];
        }
        if (isset($map['idleCPUUsage'])) {
            $model->idleCPUUsage = $map['idleCPUUsage'];
        }
        if (isset($map['instanceTrafficOut'])) {
            $model->instanceTrafficOut = $map['instanceTrafficOut'];
        }
        if (isset($map['invocations'])) {
            $model->invocations = $map['invocations'];
        }
        if (isset($map['invokeCDNOut'])) {
            $model->invokeCDNOut = $map['invokeCDNOut'];
        }
        if (isset($map['invokeInternetOut'])) {
            $model->invokeInternetOut = $map['invokeInternetOut'];
        }
        if (isset($map['memoryUsage'])) {
            $model->memoryUsage = $map['memoryUsage'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
