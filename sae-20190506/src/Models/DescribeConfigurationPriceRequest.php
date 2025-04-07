<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigurationPriceRequest extends Model
{
    /**
     * @description The CPU specifications that are required for each instance. Unit: millicores. This parameter cannot be set to 0. Valid values:
     *
     *   **500**
     *   **1000**
     *   **2000**
     *   **4000**
     *   **8000**
     *   **12000**
     *   **16000**
     *   **32000**
     *
     * This parameter is required.
     *
     * @example 2000
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The memory size that is required by each instance. Unit: MB. This parameter cannot be set to 0. The values of this parameter correspond to the values of the Cpu parameter:
     *
     *   This parameter is set to **1024** if the Cpu parameter is set to 500 or 1000.
     *   This parameter is set to **2048** if the Cpu parameter is set to 500, 1000, or 2000.
     *   This parameter is set to **4096** if the Cpu parameter is set to 1000, 2000, or 4000.
     *   This parameter is set to **8192** if the Cpu parameter is set to 2000, 4000, or 8,000.
     *   This parameter is set to **12288** if the Cpu parameter is set to 12000.
     *   This parameter is set to **16384** if the Cpu parameter is set to 4000, 8000, or 16000.
     *   This parameter is set to **24576** if the Cpu parameter is set to 12000.
     *   This parameter is set to **32768** if the Cpu parameter is set to 16000.
     *   This parameter is set to **65536** if the Cpu parameter is set to 8000, 16000, or 32000.
     *   This parameter is set to **131072** if the Cpu parameter is set to 32000.
     *
     * This parameter is required.
     *
     * @example 4096
     *
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @description Scenarios:
     *
     *   Web
     *   micro_service
     *
     * @example Web
     *
     * @var string
     */
    public $workload;
    protected $_name = [
        'cpu' => 'Cpu',
        'memory' => 'Memory',
        'resourceType' => 'ResourceType',
        'workload' => 'Workload',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->workload) {
            $res['Workload'] = $this->workload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigurationPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Workload'])) {
            $model->workload = $map['Workload'];
        }

        return $model;
    }
}
