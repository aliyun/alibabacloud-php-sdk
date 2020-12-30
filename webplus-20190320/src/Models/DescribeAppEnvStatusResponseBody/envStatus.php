<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvStatusResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvStatusResponseBody\envStatus\instanceAgentStatus;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvStatusResponseBody\envStatus\instanceAppStatus;
use AlibabaCloud\Tea\Model;

class envStatus extends Model
{
    /**
     * @var string
     */
    public $changeBanner;

    /**
     * @var string
     */
    public $latestChangeId;

    /**
     * @var string
     */
    public $envStatus;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var instanceAgentStatus
     */
    public $instanceAgentStatus;

    /**
     * @var string
     */
    public $lastEnvStatus;

    /**
     * @var instanceAppStatus
     */
    public $instanceAppStatus;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var bool
     */
    public $abortingChange;

    /**
     * @var bool
     */
    public $applyingChange;
    protected $_name = [
        'changeBanner'        => 'ChangeBanner',
        'latestChangeId'      => 'LatestChangeId',
        'envStatus'           => 'EnvStatus',
        'envName'             => 'EnvName',
        'instanceAgentStatus' => 'InstanceAgentStatus',
        'lastEnvStatus'       => 'LastEnvStatus',
        'instanceAppStatus'   => 'InstanceAppStatus',
        'envId'               => 'EnvId',
        'abortingChange'      => 'AbortingChange',
        'applyingChange'      => 'ApplyingChange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeBanner) {
            $res['ChangeBanner'] = $this->changeBanner;
        }
        if (null !== $this->latestChangeId) {
            $res['LatestChangeId'] = $this->latestChangeId;
        }
        if (null !== $this->envStatus) {
            $res['EnvStatus'] = $this->envStatus;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->instanceAgentStatus) {
            $res['InstanceAgentStatus'] = null !== $this->instanceAgentStatus ? $this->instanceAgentStatus->toMap() : null;
        }
        if (null !== $this->lastEnvStatus) {
            $res['LastEnvStatus'] = $this->lastEnvStatus;
        }
        if (null !== $this->instanceAppStatus) {
            $res['InstanceAppStatus'] = null !== $this->instanceAppStatus ? $this->instanceAppStatus->toMap() : null;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->abortingChange) {
            $res['AbortingChange'] = $this->abortingChange;
        }
        if (null !== $this->applyingChange) {
            $res['ApplyingChange'] = $this->applyingChange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeBanner'])) {
            $model->changeBanner = $map['ChangeBanner'];
        }
        if (isset($map['LatestChangeId'])) {
            $model->latestChangeId = $map['LatestChangeId'];
        }
        if (isset($map['EnvStatus'])) {
            $model->envStatus = $map['EnvStatus'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['InstanceAgentStatus'])) {
            $model->instanceAgentStatus = instanceAgentStatus::fromMap($map['InstanceAgentStatus']);
        }
        if (isset($map['LastEnvStatus'])) {
            $model->lastEnvStatus = $map['LastEnvStatus'];
        }
        if (isset($map['InstanceAppStatus'])) {
            $model->instanceAppStatus = instanceAppStatus::fromMap($map['InstanceAppStatus']);
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['AbortingChange'])) {
            $model->abortingChange = $map['AbortingChange'];
        }
        if (isset($map['ApplyingChange'])) {
            $model->applyingChange = $map['ApplyingChange'];
        }

        return $model;
    }
}
