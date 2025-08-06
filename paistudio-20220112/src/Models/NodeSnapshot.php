<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\NodeSnapshot\workloads;

class NodeSnapshot extends Model
{
    /**
     * @var int
     */
    public $ancestorQuotaWorkloadNum;

    /**
     * @var int
     */
    public $descendantQuotaWorkloadNum;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $requestCPU;

    /**
     * @var string
     */
    public $requestGPU;

    /**
     * @var string
     */
    public $requestMemory;

    /**
     * @var int
     */
    public $selfQuotaWorkloadNum;

    /**
     * @var int
     */
    public $workloadNum;

    /**
     * @var workloads[]
     */
    public $workloads;
    protected $_name = [
        'ancestorQuotaWorkloadNum' => 'AncestorQuotaWorkloadNum',
        'descendantQuotaWorkloadNum' => 'DescendantQuotaWorkloadNum',
        'nodeName' => 'NodeName',
        'requestCPU' => 'RequestCPU',
        'requestGPU' => 'RequestGPU',
        'requestMemory' => 'RequestMemory',
        'selfQuotaWorkloadNum' => 'SelfQuotaWorkloadNum',
        'workloadNum' => 'WorkloadNum',
        'workloads' => 'Workloads',
    ];

    public function validate()
    {
        if (\is_array($this->workloads)) {
            Model::validateArray($this->workloads);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ancestorQuotaWorkloadNum) {
            $res['AncestorQuotaWorkloadNum'] = $this->ancestorQuotaWorkloadNum;
        }

        if (null !== $this->descendantQuotaWorkloadNum) {
            $res['DescendantQuotaWorkloadNum'] = $this->descendantQuotaWorkloadNum;
        }

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

        if (null !== $this->selfQuotaWorkloadNum) {
            $res['SelfQuotaWorkloadNum'] = $this->selfQuotaWorkloadNum;
        }

        if (null !== $this->workloadNum) {
            $res['WorkloadNum'] = $this->workloadNum;
        }

        if (null !== $this->workloads) {
            if (\is_array($this->workloads)) {
                $res['Workloads'] = [];
                $n1 = 0;
                foreach ($this->workloads as $item1) {
                    $res['Workloads'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AncestorQuotaWorkloadNum'])) {
            $model->ancestorQuotaWorkloadNum = $map['AncestorQuotaWorkloadNum'];
        }

        if (isset($map['DescendantQuotaWorkloadNum'])) {
            $model->descendantQuotaWorkloadNum = $map['DescendantQuotaWorkloadNum'];
        }

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

        if (isset($map['SelfQuotaWorkloadNum'])) {
            $model->selfQuotaWorkloadNum = $map['SelfQuotaWorkloadNum'];
        }

        if (isset($map['WorkloadNum'])) {
            $model->workloadNum = $map['WorkloadNum'];
        }

        if (isset($map['Workloads'])) {
            if (!empty($map['Workloads'])) {
                $model->workloads = [];
                $n1 = 0;
                foreach ($map['Workloads'] as $item1) {
                    $model->workloads[$n1] = workloads::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
