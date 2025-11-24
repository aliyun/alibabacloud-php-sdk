<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\ListWaypointsResponseBody;

use AlibabaCloud\Dara\Model;

class waypoints extends Model
{
    /**
     * @var string
     */
    public $HPAEnabled;

    /**
     * @var string
     */
    public $HPAMaxReplicas;

    /**
     * @var string
     */
    public $HPAMinReplicas;

    /**
     * @var string
     */
    public $HPATargetCPU;

    /**
     * @var string
     */
    public $HPATargetMemory;

    /**
     * @var string
     */
    public $limitCPU;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $preferECI;

    /**
     * @var string
     */
    public $replicas;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $serviceAccount;
    protected $_name = [
        'HPAEnabled' => 'HPAEnabled',
        'HPAMaxReplicas' => 'HPAMaxReplicas',
        'HPAMinReplicas' => 'HPAMinReplicas',
        'HPATargetCPU' => 'HPATargetCPU',
        'HPATargetMemory' => 'HPATargetMemory',
        'limitCPU' => 'LimitCPU',
        'limitMemory' => 'LimitMemory',
        'name' => 'Name',
        'namespace' => 'Namespace',
        'preferECI' => 'PreferECI',
        'replicas' => 'Replicas',
        'requestCPU' => 'RequestCPU',
        'requestMemory' => 'RequestMemory',
        'serviceAccount' => 'ServiceAccount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->HPAEnabled) {
            $res['HPAEnabled'] = $this->HPAEnabled;
        }

        if (null !== $this->HPAMaxReplicas) {
            $res['HPAMaxReplicas'] = $this->HPAMaxReplicas;
        }

        if (null !== $this->HPAMinReplicas) {
            $res['HPAMinReplicas'] = $this->HPAMinReplicas;
        }

        if (null !== $this->HPATargetCPU) {
            $res['HPATargetCPU'] = $this->HPATargetCPU;
        }

        if (null !== $this->HPATargetMemory) {
            $res['HPATargetMemory'] = $this->HPATargetMemory;
        }

        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }

        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->preferECI) {
            $res['PreferECI'] = $this->preferECI;
        }

        if (null !== $this->replicas) {
            $res['Replicas'] = $this->replicas;
        }

        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }

        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }

        if (null !== $this->serviceAccount) {
            $res['ServiceAccount'] = $this->serviceAccount;
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
        if (isset($map['HPAEnabled'])) {
            $model->HPAEnabled = $map['HPAEnabled'];
        }

        if (isset($map['HPAMaxReplicas'])) {
            $model->HPAMaxReplicas = $map['HPAMaxReplicas'];
        }

        if (isset($map['HPAMinReplicas'])) {
            $model->HPAMinReplicas = $map['HPAMinReplicas'];
        }

        if (isset($map['HPATargetCPU'])) {
            $model->HPATargetCPU = $map['HPATargetCPU'];
        }

        if (isset($map['HPATargetMemory'])) {
            $model->HPATargetMemory = $map['HPATargetMemory'];
        }

        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }

        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PreferECI'])) {
            $model->preferECI = $map['PreferECI'];
        }

        if (isset($map['Replicas'])) {
            $model->replicas = $map['Replicas'];
        }

        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }

        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }

        if (isset($map['ServiceAccount'])) {
            $model->serviceAccount = $map['ServiceAccount'];
        }

        return $model;
    }
}
