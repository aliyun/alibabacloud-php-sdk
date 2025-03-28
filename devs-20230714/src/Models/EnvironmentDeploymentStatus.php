<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class EnvironmentDeploymentStatus extends Model
{
    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string[]
     */
    public $serviceDeployments;
    protected $_name = [
        'finishedTime' => 'finishedTime',
        'phase' => 'phase',
        'pipelineName' => 'pipelineName',
        'serviceDeployments' => 'serviceDeployments',
    ];

    public function validate()
    {
        if (\is_array($this->serviceDeployments)) {
            Model::validateArray($this->serviceDeployments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->finishedTime) {
            $res['finishedTime'] = $this->finishedTime;
        }

        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        if (null !== $this->serviceDeployments) {
            if (\is_array($this->serviceDeployments)) {
                $res['serviceDeployments'] = [];
                foreach ($this->serviceDeployments as $key1 => $value1) {
                    $res['serviceDeployments'][$key1] = $value1;
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
        if (isset($map['finishedTime'])) {
            $model->finishedTime = $map['finishedTime'];
        }

        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        if (isset($map['serviceDeployments'])) {
            if (!empty($map['serviceDeployments'])) {
                $model->serviceDeployments = [];
                foreach ($map['serviceDeployments'] as $key1 => $value1) {
                    $model->serviceDeployments[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
