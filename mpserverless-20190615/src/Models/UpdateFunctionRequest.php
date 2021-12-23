<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionRequest extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $httpTriggerPath;

    /**
     * @var int
     */
    public $instanceConcurrency;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $runtime;

    /**
     * @var string
     */
    public $spaceId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $timingTriggerConfig;
    protected $_name = [
        'desc'                => 'Desc',
        'httpTriggerPath'     => 'HttpTriggerPath',
        'instanceConcurrency' => 'InstanceConcurrency',
        'memory'              => 'Memory',
        'name'                => 'Name',
        'runtime'             => 'Runtime',
        'spaceId'             => 'SpaceId',
        'timeout'             => 'Timeout',
        'timingTriggerConfig' => 'TimingTriggerConfig',
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

        return $model;
    }
}
