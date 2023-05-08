<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class OPA extends Model
{
    /**
     * @description Indicates whether the OPA plug-in is installed. Valid values:
     *
     *   `true`: The OPA plug-in is installed.
     *   `false`: The OPA plug-in is not installed.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The maximum number of CPU cores that are available to the OPA proxy container.
     *
     * @example 1
     *
     * @var string
     */
    public $limitCPU;

    /**
     * @description The maximum size of the memory that is available to the OPA proxy container.
     *
     * @example 512Mi
     *
     * @var string
     */
    public $limitMemory;

    /**
     * @description The level of the logs to be generated for OPA.
     *
     * @example info
     *
     * @var string
     */
    public $logLevel;

    /**
     * @description The number of CPU cores that are requested by the OPA proxy container.
     *
     * @example 2
     *
     * @var string
     */
    public $requestCPU;

    /**
     * @description The size of the memory that is requested by the OPA proxy container.
     *
     * @example 1024Mi
     *
     * @var string
     */
    public $requestMemory;
    protected $_name = [
        'enabled'       => 'Enabled',
        'limitCPU'      => 'LimitCPU',
        'limitMemory'   => 'LimitMemory',
        'logLevel'      => 'LogLevel',
        'requestCPU'    => 'RequestCPU',
        'requestMemory' => 'RequestMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OPA
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }

        return $model;
    }
}
