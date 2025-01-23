<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class NodePodInfo extends Model
{
    /**
     * @var string
     */
    public $phase;
    /**
     * @var string
     */
    public $podIP;
    /**
     * @var string
     */
    public $podName;
    /**
     * @var string
     */
    public $podNamespace;
    /**
     * @var ResourceAmount
     */
    public $resourceSpec;
    /**
     * @var string
     */
    public $workloadId;
    /**
     * @var string
     */
    public $workloadType;
    protected $_name = [
        'phase'        => 'Phase',
        'podIP'        => 'PodIP',
        'podName'      => 'PodName',
        'podNamespace' => 'PodNamespace',
        'resourceSpec' => 'ResourceSpec',
        'workloadId'   => 'WorkloadId',
        'workloadType' => 'WorkloadType',
    ];

    public function validate()
    {
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->podIP) {
            $res['PodIP'] = $this->podIP;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        if (null !== $this->podNamespace) {
            $res['PodNamespace'] = $this->podNamespace;
        }

        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
        }

        if (null !== $this->workloadId) {
            $res['WorkloadId'] = $this->workloadId;
        }

        if (null !== $this->workloadType) {
            $res['WorkloadType'] = $this->workloadType;
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
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['PodIP'])) {
            $model->podIP = $map['PodIP'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        if (isset($map['PodNamespace'])) {
            $model->podNamespace = $map['PodNamespace'];
        }

        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = ResourceAmount::fromMap($map['ResourceSpec']);
        }

        if (isset($map['WorkloadId'])) {
            $model->workloadId = $map['WorkloadId'];
        }

        if (isset($map['WorkloadType'])) {
            $model->workloadType = $map['WorkloadType'];
        }

        return $model;
    }
}
