<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OfflinePipelineByAsyncRequest;

use AlibabaCloud\Dara\Model;

class offlineCommand extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var bool
     */
    public $delete;

    /**
     * @var int
     */
    public $fileId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $pipelineId;
    protected $_name = [
        'comment' => 'Comment',
        'delete' => 'Delete',
        'fileId' => 'FileId',
        'nodeId' => 'NodeId',
        'pipelineId' => 'PipelineId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        return $model;
    }
}
