<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListPipelinesResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $groupId;
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
        'groupId'          => 'groupId',
        'pipelineId'       => 'pipelineId',
        'pipelineName'     => 'pipelineName',
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
