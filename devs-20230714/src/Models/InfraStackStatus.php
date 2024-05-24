<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\SDK\Devs\V20230714\Models\InfraStackStatus\templateStatus;
use AlibabaCloud\Tea\Model;

class InfraStackStatus extends Model
{
    /**
     * @example Success!
     *
     * @var string
     */
    public $message;

    /**
     * @example 0
     *
     * @var int
     */
    public $observedGeneration;

    /**
     * @example 2021-10-08T23:14:16Z
     *
     * @var string
     */
    public $observedTime;

    /**
     * @example DeploySuccess
     *
     * @var string
     */
    public $phase;

    /**
     * @var InfraStackResourceState
     */
    public $resourceState;

    /**
     * @example {"vpcId":"vpc-xxx"}
     *
     * @var mixed[]
     */
    public $templateOutputs;

    /**
     * @var templateStatus
     */
    public $templateStatus;
    protected $_name = [
        'message'            => 'message',
        'observedGeneration' => 'observedGeneration',
        'observedTime'       => 'observedTime',
        'phase'              => 'phase',
        'resourceState'      => 'resourceState',
        'templateOutputs'    => 'templateOutputs',
        'templateStatus'     => 'templateStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->observedGeneration) {
            $res['observedGeneration'] = $this->observedGeneration;
        }
        if (null !== $this->observedTime) {
            $res['observedTime'] = $this->observedTime;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->resourceState) {
            $res['resourceState'] = null !== $this->resourceState ? $this->resourceState->toMap() : null;
        }
        if (null !== $this->templateOutputs) {
            $res['templateOutputs'] = $this->templateOutputs;
        }
        if (null !== $this->templateStatus) {
            $res['templateStatus'] = null !== $this->templateStatus ? $this->templateStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InfraStackStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['observedGeneration'])) {
            $model->observedGeneration = $map['observedGeneration'];
        }
        if (isset($map['observedTime'])) {
            $model->observedTime = $map['observedTime'];
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['resourceState'])) {
            $model->resourceState = InfraStackResourceState::fromMap($map['resourceState']);
        }
        if (isset($map['templateOutputs'])) {
            $model->templateOutputs = $map['templateOutputs'];
        }
        if (isset($map['templateStatus'])) {
            $model->templateStatus = templateStatus::fromMap($map['templateStatus']);
        }

        return $model;
    }
}
