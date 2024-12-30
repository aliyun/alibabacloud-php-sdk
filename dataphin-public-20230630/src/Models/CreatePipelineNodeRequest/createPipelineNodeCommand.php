<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeRequest\createPipelineNodeCommand\fileInfo;
use AlibabaCloud\Tea\Model;

class createPipelineNodeCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @description This parameter is required.
     *
     * @example REAL_TIME
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description This parameter is required.
     *
     * @example test_pipeline
     *
     * @var string
     */
    public $pipelineName;

    /**
     * @description This parameter is required.
     *
     * @example REAL_TIME_PIPELINE
     *
     * @var string
     */
    public $pipelineType;

    /**
     * @description This parameter is required.
     *
     * @example 7091124176569088
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'fileInfo'     => 'FileInfo',
        'nodeType'     => 'NodeType',
        'pipelineName' => 'PipelineName',
        'pipelineType' => 'PipelineType',
        'projectId'    => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileInfo) {
            $res['FileInfo'] = null !== $this->fileInfo ? $this->fileInfo->toMap() : null;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->pipelineName) {
            $res['PipelineName'] = $this->pipelineName;
        }
        if (null !== $this->pipelineType) {
            $res['PipelineType'] = $this->pipelineType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createPipelineNodeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileInfo'])) {
            $model->fileInfo = fileInfo::fromMap($map['FileInfo']);
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PipelineName'])) {
            $model->pipelineName = $map['PipelineName'];
        }
        if (isset($map['PipelineType'])) {
            $model->pipelineType = $map['PipelineType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
