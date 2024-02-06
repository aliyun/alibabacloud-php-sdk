<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances\networkAttributes;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeARMServerInstancesResponseBody\servers\AICInstances\sdgDeployInfo;
use AlibabaCloud\Tea\Model;

class AICInstances extends Model
{
    /**
     * @description The refresh rate of the AIC instance. Unit: Hz.
     *
     * @example 120
     *
     * @var int
     */
    public $frequency;

    /**
     * @description The ID of the AIC image.
     *
     * @example m-****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the AIC instance.
     *
     * @example aic-instance****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The operation that was most recently performed.
     *
     * @example ServerCreate
     *
     * @var string
     */
    public $latestAction;

    /**
     * @description The name of the container.
     *
     * @example AIC-Name
     *
     * @var string
     */
    public $name;

    /**
     * @description The network attributes of the AIC instance.
     *
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @description The resolution of the AIC instance.
     *
     * @example 1920*1080
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The information about the shared data group (SDG) that is deployed on the AIC instance.
     *
     * @var sdgDeployInfo
     */
    public $sdgDeployInfo;

    /**
     * @description The specification of the AIC instance.
     *
     * @example aic.cf53r.c2.np
     *
     * @var string
     */
    public $spec;

    /**
     * @description The operation status of the AIC instance. Valid values:
     *
     *   **success**
     *   **failed**
     *   **creating**
     *   **releasing**
     *   **rebooting**
     *   **reseting**
     *
     * @example success
     *
     * @var string
     */
    public $state;

    /**
     * @description The running status of the AIC instance. Valid values:
     *
     *   **running**
     *   **pending**
     *   **terminating**
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'frequency'         => 'Frequency',
        'imageId'           => 'ImageId',
        'instanceId'        => 'InstanceId',
        'latestAction'      => 'LatestAction',
        'name'              => 'Name',
        'networkAttributes' => 'NetworkAttributes',
        'resolution'        => 'Resolution',
        'sdgDeployInfo'     => 'SdgDeployInfo',
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
        if (null !== $this->latestAction) {
            $res['LatestAction'] = $this->latestAction;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->sdgDeployInfo) {
            $res['SdgDeployInfo'] = null !== $this->sdgDeployInfo ? $this->sdgDeployInfo->toMap() : null;
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
