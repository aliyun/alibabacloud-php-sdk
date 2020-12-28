<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig;

use AlibabaCloud\Tea\Model;

class OPA extends Model
{
    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var string
     */
    public $logLevel;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $limitMemory;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $limitCPU;
    protected $_name = [
        'requestMemory' => 'RequestMemory',
        'logLevel'      => 'LogLevel',
        'enabled'       => 'Enabled',
        'limitMemory'   => 'LimitMemory',
        'requestCPU'    => 'RequestCPU',
        'limitCPU'      => 'LimitCPU',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->limitMemory) {
            $res['LimitMemory'] = $this->limitMemory;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->limitCPU) {
            $res['LimitCPU'] = $this->limitCPU;
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
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['LimitMemory'])) {
            $model->limitMemory = $map['LimitMemory'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['LimitCPU'])) {
            $model->limitCPU = $map['LimitCPU'];
        }

        return $model;
    }
}
