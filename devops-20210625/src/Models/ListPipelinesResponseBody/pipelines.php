<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponseBody;

use AlibabaCloud\Tea\Model;

class pipelines extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorAccountId;

    /**
     * @var int
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $pipelineName;
    protected $_name = [
        'createTime'       => 'createTime',
        'creatorAccountId' => 'creatorAccountId',
        'pipelineId'       => 'pipelineId',
        'pipelineName'     => 'pipelineName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
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
