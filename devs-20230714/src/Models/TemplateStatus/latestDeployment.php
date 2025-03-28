<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\TemplateStatus;

use AlibabaCloud\Dara\Model;

class latestDeployment extends Model
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
     * @var string
     */
    public $startTime;
    protected $_name = [
        'finishedTime' => 'finishedTime',
        'phase' => 'phase',
        'pipelineName' => 'pipelineName',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
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

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
