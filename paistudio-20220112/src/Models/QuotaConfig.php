<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class QuotaConfig extends Model
{
    /**
     * @var ACS
     */
    public $ACS;

    /**
     * @example ceeb37xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 470.199.02
     *
     * @var string
     */
    public $defaultGPUDriver;

    /**
     * @var WorkspaceSpecs[]
     */
    public $resourceSpecs;

    /**
     * @var string[]
     */
    public $supportGPUDrivers;

    /**
     * @example false
     *
     * @var bool
     */
    public $supportRDMA;

    /**
     * @var UserVpc
     */
    public $userVpc;
    protected $_name = [
        'ACS'               => 'ACS',
        'clusterId'         => 'ClusterId',
        'defaultGPUDriver'  => 'DefaultGPUDriver',
        'resourceSpecs'     => 'ResourceSpecs',
        'supportGPUDrivers' => 'SupportGPUDrivers',
        'supportRDMA'       => 'SupportRDMA',
        'userVpc'           => 'UserVpc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ACS) {
            $res['ACS'] = null !== $this->ACS ? $this->ACS->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->defaultGPUDriver) {
            $res['DefaultGPUDriver'] = $this->defaultGPUDriver;
        }
        if (null !== $this->resourceSpecs) {
            $res['ResourceSpecs'] = [];
            if (null !== $this->resourceSpecs && \is_array($this->resourceSpecs)) {
                $n = 0;
                foreach ($this->resourceSpecs as $item) {
                    $res['ResourceSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->supportGPUDrivers) {
            $res['SupportGPUDrivers'] = $this->supportGPUDrivers;
        }
        if (null !== $this->supportRDMA) {
            $res['SupportRDMA'] = $this->supportRDMA;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuotaConfig
     */
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
        if (isset($map['ResourceSpecs'])) {
            if (!empty($map['ResourceSpecs'])) {
                $model->resourceSpecs = [];
                $n                    = 0;
                foreach ($map['ResourceSpecs'] as $item) {
                    $model->resourceSpecs[$n++] = null !== $item ? WorkspaceSpecs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SupportGPUDrivers'])) {
            if (!empty($map['SupportGPUDrivers'])) {
                $model->supportGPUDrivers = $map['SupportGPUDrivers'];
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
