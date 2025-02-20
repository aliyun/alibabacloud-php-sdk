<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelineGroupPipelinesResponseBody;

use AlibabaCloud\Dara\Model;

class pipelines extends Model
{
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var int
     */
    public $pipelineId;
    /**
     * @var string
     */
    public $pipelineName;
    protected $_name = [
        'createTime'   => 'createTime',
        'pipelineId'   => 'pipelineId',
        'pipelineName' => 'pipelineName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }

        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }

        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }

        return $model;
    }
}
