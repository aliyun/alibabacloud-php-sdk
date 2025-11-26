<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances\networkAttributes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances\sdgDeployInfo;

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
     * @var string
     */
    public $latestAction;

    /**
     * @var string
     */
    public $name;

    /**
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var sdgDeployInfo
     */
    public $sdgDeployInfo;

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
        'frequency' => 'Frequency',
        'imageId' => 'ImageId',
        'instanceId' => 'InstanceId',
        'latestAction' => 'LatestAction',
        'name' => 'Name',
        'networkAttributes' => 'NetworkAttributes',
        'resolution' => 'Resolution',
        'sdgDeployInfo' => 'SdgDeployInfo',
        'spec' => 'Spec',
        'state' => 'State',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->networkAttributes) {
            $this->networkAttributes->validate();
        }
        if (null !== $this->sdgDeployInfo) {
            $this->sdgDeployInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->latestAction) {
            $res['LatestAction'] = $this->latestAction;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toArray($noStream) : $this->networkAttributes;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->sdgDeployInfo) {
            $res['SdgDeployInfo'] = null !== $this->sdgDeployInfo ? $this->sdgDeployInfo->toArray($noStream) : $this->sdgDeployInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['LatestAction'])) {
            $model->latestAction = $map['LatestAction'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['SdgDeployInfo'])) {
            $model->sdgDeployInfo = sdgDeployInfo::fromMap($map['SdgDeployInfo']);
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
