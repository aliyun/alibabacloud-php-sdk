<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class QuotaConfig extends Model
{
    /**
     * @var ACS
     */
    public $ACS;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $defaultGPUDriver;

    /**
     * @var bool
     */
    public $enablePreemptSubquotaWorkloads;

    /**
     * @var bool
     */
    public $enableSubQuotaPreemption;

    /**
     * @var WorkspaceSpecs[]
     */
    public $resourceSpecs;

    /**
     * @var SubQuotaPreemptionConfig
     */
    public $subQuotaPreemptionConfig;

    /**
     * @var string[]
     */
    public $supportGPUDrivers;

    /**
     * @var bool
     */
    public $supportRDMA;

    /**
     * @var UserVpc
     */
    public $userVpc;
    protected $_name = [
        'ACS' => 'ACS',
        'clusterId' => 'ClusterId',
        'defaultGPUDriver' => 'DefaultGPUDriver',
        'enablePreemptSubquotaWorkloads' => 'EnablePreemptSubquotaWorkloads',
        'enableSubQuotaPreemption' => 'EnableSubQuotaPreemption',
        'resourceSpecs' => 'ResourceSpecs',
        'subQuotaPreemptionConfig' => 'SubQuotaPreemptionConfig',
        'supportGPUDrivers' => 'SupportGPUDrivers',
        'supportRDMA' => 'SupportRDMA',
        'userVpc' => 'UserVpc',
    ];

    public function validate()
    {
        if (null !== $this->ACS) {
            $this->ACS->validate();
        }
        if (\is_array($this->resourceSpecs)) {
            Model::validateArray($this->resourceSpecs);
        }
        if (null !== $this->subQuotaPreemptionConfig) {
            $this->subQuotaPreemptionConfig->validate();
        }
        if (\is_array($this->supportGPUDrivers)) {
            Model::validateArray($this->supportGPUDrivers);
        }
        if (null !== $this->userVpc) {
            $this->userVpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ACS) {
            $res['ACS'] = null !== $this->ACS ? $this->ACS->toArray($noStream) : $this->ACS;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->defaultGPUDriver) {
            $res['DefaultGPUDriver'] = $this->defaultGPUDriver;
        }

        if (null !== $this->enablePreemptSubquotaWorkloads) {
            $res['EnablePreemptSubquotaWorkloads'] = $this->enablePreemptSubquotaWorkloads;
        }

        if (null !== $this->enableSubQuotaPreemption) {
            $res['EnableSubQuotaPreemption'] = $this->enableSubQuotaPreemption;
        }

        if (null !== $this->resourceSpecs) {
            if (\is_array($this->resourceSpecs)) {
                $res['ResourceSpecs'] = [];
                $n1 = 0;
                foreach ($this->resourceSpecs as $item1) {
                    $res['ResourceSpecs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subQuotaPreemptionConfig) {
            $res['SubQuotaPreemptionConfig'] = null !== $this->subQuotaPreemptionConfig ? $this->subQuotaPreemptionConfig->toArray($noStream) : $this->subQuotaPreemptionConfig;
        }

        if (null !== $this->supportGPUDrivers) {
            if (\is_array($this->supportGPUDrivers)) {
                $res['SupportGPUDrivers'] = [];
                $n1 = 0;
                foreach ($this->supportGPUDrivers as $item1) {
                    $res['SupportGPUDrivers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->supportRDMA) {
            $res['SupportRDMA'] = $this->supportRDMA;
        }

        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toArray($noStream) : $this->userVpc;
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
        if (isset($map['ACS'])) {
            $model->ACS = ACS::fromMap($map['ACS']);
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DefaultGPUDriver'])) {
            $model->defaultGPUDriver = $map['DefaultGPUDriver'];
        }

        if (isset($map['EnablePreemptSubquotaWorkloads'])) {
            $model->enablePreemptSubquotaWorkloads = $map['EnablePreemptSubquotaWorkloads'];
        }

        if (isset($map['EnableSubQuotaPreemption'])) {
            $model->enableSubQuotaPreemption = $map['EnableSubQuotaPreemption'];
        }

        if (isset($map['ResourceSpecs'])) {
            if (!empty($map['ResourceSpecs'])) {
                $model->resourceSpecs = [];
                $n1 = 0;
                foreach ($map['ResourceSpecs'] as $item1) {
                    $model->resourceSpecs[$n1++] = WorkspaceSpecs::fromMap($item1);
                }
            }
        }

        if (isset($map['SubQuotaPreemptionConfig'])) {
            $model->subQuotaPreemptionConfig = SubQuotaPreemptionConfig::fromMap($map['SubQuotaPreemptionConfig']);
        }

        if (isset($map['SupportGPUDrivers'])) {
            if (!empty($map['SupportGPUDrivers'])) {
                $model->supportGPUDrivers = [];
                $n1 = 0;
                foreach ($map['SupportGPUDrivers'] as $item1) {
                    $model->supportGPUDrivers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SupportRDMA'])) {
            $model->supportRDMA = $map['SupportRDMA'];
        }

        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }

        return $model;
    }
}
