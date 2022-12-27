<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponseBody;

use AlibabaCloud\Tea\Model;

class pipelines extends Model
{
    /**
     * @example 1586863220000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 22121222
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @example 124
     *
     * @var int
     */
    public $pipelineId;

    /**
     * @example 流水线
     *
     * @var string
     */
    public $pipelineName;
    protected $_name = [
        'createTime'       => 'createTime',
        'creatorAccountId' => 'creatorAccountId',
        'groupId'          => 'groupId',
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
        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
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
        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
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
