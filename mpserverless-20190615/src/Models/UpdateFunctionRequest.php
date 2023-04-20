<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionRequest extends Model
{
    /**
     * @example description
     *
     * @var string
     */
    public $desc;

    /**
     * @example /http/hello
     *
     * @var string
     */
    public $httpTriggerPath;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @example 256
     *
     * @var int
     */
    public $memory;

    /**
     * @example demoFunction
     *
     * @var string
     */
    public $name;

    /**
     * @example nodejs8
     *
     * @var string
     */
    public $runtime;

    /**
     * @example dece4ea0-d432-4cfa-8514-8a88d205e2b8
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example 5
     *
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $timingTriggerConfig;

    /**
     * @example hello
     *
     * @var string
     */
    public $timingTriggerUserPayload;
    protected $_name = [
        'desc'                     => 'Desc',
        'httpTriggerPath'          => 'HttpTriggerPath',
        'instanceConcurrency'      => 'InstanceConcurrency',
        'memory'                   => 'Memory',
        'name'                     => 'Name',
        'runtime'                  => 'Runtime',
        'spaceId'                  => 'SpaceId',
        'timeout'                  => 'Timeout',
        'timingTriggerConfig'      => 'TimingTriggerConfig',
        'timingTriggerUserPayload' => 'TimingTriggerUserPayload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->httpTriggerPath) {
            $res['HttpTriggerPath'] = $this->httpTriggerPath;
        }
        if (null !== $this->instanceConcurrency) {
            $res['InstanceConcurrency'] = $this->instanceConcurrency;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->runtime) {
            $res['Runtime'] = $this->runtime;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->timingTriggerConfig) {
            $res['TimingTriggerConfig'] = $this->timingTriggerConfig;
        }
        if (null !== $this->timingTriggerUserPayload) {
            $res['TimingTriggerUserPayload'] = $this->timingTriggerUserPayload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['HttpTriggerPath'])) {
            $model->httpTriggerPath = $map['HttpTriggerPath'];
        }
        if (isset($map['InstanceConcurrency'])) {
            $model->instanceConcurrency = $map['InstanceConcurrency'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Runtime'])) {
            $model->runtime = $map['Runtime'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['TimingTriggerConfig'])) {
            $model->timingTriggerConfig = $map['TimingTriggerConfig'];
        }
        if (isset($map['TimingTriggerUserPayload'])) {
            $model->timingTriggerUserPayload = $map['TimingTriggerUserPayload'];
        }

        return $model;
    }
}
