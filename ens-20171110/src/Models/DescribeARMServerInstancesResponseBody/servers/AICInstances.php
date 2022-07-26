<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances\networkAttributes;
use AlibabaCloud\Tea\Model;

class AICInstances extends Model
{
    /**
     * @var int
     */
    public $frequency;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'frequency'         => 'Frequency',
        'imageId'           => 'ImageId',
        'instanceId'        => 'InstanceId',
        'networkAttributes' => 'NetworkAttributes',
        'resolution'        => 'Resolution',
        'spec'              => 'Spec',
        'state'             => 'State',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AICInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
