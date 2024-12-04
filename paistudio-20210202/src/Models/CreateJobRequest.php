<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class CreateJobRequest extends Model
{
    /**
     * @example EXECUTE_ALL
     *
     * @var string
     */
    public $executeType;

    /**
     * @example draft-o1p0k444nlq3cd50zz
     *
     * @deprecated
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example id-2d88-1608982098027-91558
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example {"mlflow":{"experimentId":"exp-1"}}
     *
     * @var string
     */
    public $options;

    /**
     * @example draft-o1p0k444nlq3cd50zz
     *
     * @var string
     */
    public $pipelineDraftId;
    protected $_name = [
        'executeType'     => 'ExecuteType',
        'experimentId'    => 'ExperimentId',
        'nodeId'          => 'NodeId',
        'options'         => 'Options',
        'pipelineDraftId' => 'PipelineDraftId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateJobRequest
     */
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
