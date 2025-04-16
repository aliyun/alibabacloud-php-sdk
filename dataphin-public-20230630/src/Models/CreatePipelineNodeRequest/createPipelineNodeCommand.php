<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreatePipelineNodeRequest\createPipelineNodeCommand\fileInfo;

class createPipelineNodeCommand extends Model
{
    /**
     * @var fileInfo
     */
    public $fileInfo;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $pipelineType;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'fileInfo' => 'FileInfo',
        'nodeType' => 'NodeType',
        'pipelineName' => 'PipelineName',
        'pipelineType' => 'PipelineType',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (null !== $this->fileInfo) {
            $this->fileInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileInfo) {
            $res['FileInfo'] = null !== $this->fileInfo ? $this->fileInfo->toArray($noStream) : $this->fileInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
