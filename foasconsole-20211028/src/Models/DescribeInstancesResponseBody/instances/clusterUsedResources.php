<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models\DescribeInstancesResponseBody\instances;

use AlibabaCloud\Dara\Model;

class clusterUsedResources extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var float
     */
    public $elasticUsedCpu;

    /**
     * @var float
     */
    public $elasticUsedMemory;

    /**
     * @var float
     */
    public $elasticUsedResource;

    /**
     * @var float
     */
    public $guaranteedUsedCpu;

    /**
     * @var float
     */
    public $guaranteedUsedMemory;

    /**
     * @var float
     */
    public $guaranteedUsedResource;

    /**
     * @var bool
     */
    public $ha;

    /**
     * @var float
     */
    public $haUsedCpu;

    /**
     * @var float
     */
    public $haUsedMemory;

    /**
     * @var float
     */
    public $haUsedResource;

    /**
     * @var float
     */
    public $usedCpu;

    /**
     * @var float
     */
    public $usedMemory;

    /**
     * @var float
     */
    public $usedResource;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'elasticUsedCpu' => 'ElasticUsedCpu',
        'elasticUsedMemory' => 'ElasticUsedMemory',
        'elasticUsedResource' => 'ElasticUsedResource',
        'guaranteedUsedCpu' => 'GuaranteedUsedCpu',
        'guaranteedUsedMemory' => 'GuaranteedUsedMemory',
        'guaranteedUsedResource' => 'GuaranteedUsedResource',
        'ha' => 'Ha',
        'haUsedCpu' => 'HaUsedCpu',
        'haUsedMemory' => 'HaUsedMemory',
        'haUsedResource' => 'HaUsedResource',
        'usedCpu' => 'UsedCpu',
        'usedMemory' => 'UsedMemory',
        'usedResource' => 'UsedResource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->elasticUsedCpu) {
            $res['ElasticUsedCpu'] = $this->elasticUsedCpu;
        }

        if (null !== $this->elasticUsedMemory) {
            $res['ElasticUsedMemory'] = $this->elasticUsedMemory;
        }

        if (null !== $this->elasticUsedResource) {
            $res['ElasticUsedResource'] = $this->elasticUsedResource;
        }

        if (null !== $this->guaranteedUsedCpu) {
            $res['GuaranteedUsedCpu'] = $this->guaranteedUsedCpu;
        }

        if (null !== $this->guaranteedUsedMemory) {
            $res['GuaranteedUsedMemory'] = $this->guaranteedUsedMemory;
        }

        if (null !== $this->guaranteedUsedResource) {
            $res['GuaranteedUsedResource'] = $this->guaranteedUsedResource;
        }

        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }

        if (null !== $this->haUsedCpu) {
            $res['HaUsedCpu'] = $this->haUsedCpu;
        }

        if (null !== $this->haUsedMemory) {
            $res['HaUsedMemory'] = $this->haUsedMemory;
        }

        if (null !== $this->haUsedResource) {
            $res['HaUsedResource'] = $this->haUsedResource;
        }

        if (null !== $this->usedCpu) {
            $res['UsedCpu'] = $this->usedCpu;
        }

        if (null !== $this->usedMemory) {
            $res['UsedMemory'] = $this->usedMemory;
        }

        if (null !== $this->usedResource) {
            $res['UsedResource'] = $this->usedResource;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ElasticUsedCpu'])) {
            $model->elasticUsedCpu = $map['ElasticUsedCpu'];
        }

        if (isset($map['ElasticUsedMemory'])) {
            $model->elasticUsedMemory = $map['ElasticUsedMemory'];
        }

        if (isset($map['ElasticUsedResource'])) {
            $model->elasticUsedResource = $map['ElasticUsedResource'];
        }

        if (isset($map['GuaranteedUsedCpu'])) {
            $model->guaranteedUsedCpu = $map['GuaranteedUsedCpu'];
        }

        if (isset($map['GuaranteedUsedMemory'])) {
            $model->guaranteedUsedMemory = $map['GuaranteedUsedMemory'];
        }

        if (isset($map['GuaranteedUsedResource'])) {
            $model->guaranteedUsedResource = $map['GuaranteedUsedResource'];
        }

        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }

        if (isset($map['HaUsedCpu'])) {
            $model->haUsedCpu = $map['HaUsedCpu'];
        }

        if (isset($map['HaUsedMemory'])) {
            $model->haUsedMemory = $map['HaUsedMemory'];
        }

        if (isset($map['HaUsedResource'])) {
            $model->haUsedResource = $map['HaUsedResource'];
        }

        if (isset($map['UsedCpu'])) {
            $model->usedCpu = $map['UsedCpu'];
        }

        if (isset($map['UsedMemory'])) {
            $model->usedMemory = $map['UsedMemory'];
        }

        if (isset($map['UsedResource'])) {
            $model->usedResource = $map['UsedResource'];
        }

        return $model;
    }
}
