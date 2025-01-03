<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResponseBody\data\envParams;

use AlibabaCloud\Tea\Model;

class resourceNodes extends Model
{
    /**
     * @example p-jt-waf-app1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example 90
     *
     * @var int
     */
    public $requestCPU;

    /**
     * @example 8
     *
     * @var int
     */
    public $requestGPU;

    /**
     * @example 500
     *
     * @var int
     */
    public $requestMemory;

    /**
     * @example 90
     *
     * @var int
     */
    public $totalCPU;

    /**
     * @example 8
     *
     * @var int
     */
    public $totalGPU;

    /**
     * @example 500
     *
     * @var int
     */
    public $totalMemory;
    protected $_name = [
        'nodeName'      => 'NodeName',
        'requestCPU'    => 'RequestCPU',
        'requestGPU'    => 'RequestGPU',
        'requestMemory' => 'RequestMemory',
        'totalCPU'      => 'TotalCPU',
        'totalGPU'      => 'TotalGPU',
        'totalMemory'   => 'TotalMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->requestCPU) {
            $res['RequestCPU'] = $this->requestCPU;
        }
        if (null !== $this->requestGPU) {
            $res['RequestGPU'] = $this->requestGPU;
        }
        if (null !== $this->requestMemory) {
            $res['RequestMemory'] = $this->requestMemory;
        }
        if (null !== $this->totalCPU) {
            $res['TotalCPU'] = $this->totalCPU;
        }
        if (null !== $this->totalGPU) {
            $res['TotalGPU'] = $this->totalGPU;
        }
        if (null !== $this->totalMemory) {
            $res['TotalMemory'] = $this->totalMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['RequestCPU'])) {
            $model->requestCPU = $map['RequestCPU'];
        }
        if (isset($map['RequestGPU'])) {
            $model->requestGPU = $map['RequestGPU'];
        }
        if (isset($map['RequestMemory'])) {
            $model->requestMemory = $map['RequestMemory'];
        }
        if (isset($map['TotalCPU'])) {
            $model->totalCPU = $map['TotalCPU'];
        }
        if (isset($map['TotalGPU'])) {
            $model->totalGPU = $map['TotalGPU'];
        }
        if (isset($map['TotalMemory'])) {
            $model->totalMemory = $map['TotalMemory'];
        }

        return $model;
    }
}
