<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Dara\Model;

class CreateJobRequest extends Model
{
    /**
     * @var string
     */
    public $executeType;

    /**
     * @var string
     */
    public $experimentId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $pipelineDraftId;
    protected $_name = [
        'executeType' => 'ExecuteType',
        'experimentId' => 'ExperimentId',
        'nodeId' => 'NodeId',
        'options' => 'Options',
        'pipelineDraftId' => 'PipelineDraftId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executeType) {
            $res['ExecuteType'] = $this->executeType;
        }

        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->pipelineDraftId) {
            $res['PipelineDraftId'] = $this->pipelineDraftId;
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
        if (isset($map['ExecuteType'])) {
            $model->executeType = $map['ExecuteType'];
        }

        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['PipelineDraftId'])) {
            $model->pipelineDraftId = $map['PipelineDraftId'];
        }

        return $model;
    }
}
