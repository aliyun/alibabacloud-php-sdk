<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineGroupPipelinesRequest extends Model
{
    /**
     * @var int
     */
    public $createEndTime;

    /**
     * @var int
     */
    public $createStartTime;

    /**
     * @var int
     */
    public $executeEndTime;

    /**
     * @var int
     */
    public $executeStartTime;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $resultStatusList;
    protected $_name = [
        'createEndTime'    => 'createEndTime',
        'createStartTime'  => 'createStartTime',
        'executeEndTime'   => 'executeEndTime',
        'executeStartTime' => 'executeStartTime',
        'maxResults'       => 'maxResults',
        'nextToken'        => 'nextToken',
        'pipelineName'     => 'pipelineName',
        'resultStatusList' => 'resultStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }
        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }
        if (null !== $this->executeEndTime) {
            $res['executeEndTime'] = $this->executeEndTime;
        }
        if (null !== $this->executeStartTime) {
            $res['executeStartTime'] = $this->executeStartTime;
        }
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }
        if (null !== $this->resultStatusList) {
            $res['resultStatusList'] = $this->resultStatusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineGroupPipelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }
        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }
        if (isset($map['executeEndTime'])) {
            $model->executeEndTime = $map['executeEndTime'];
        }
        if (isset($map['executeStartTime'])) {
            $model->executeStartTime = $map['executeStartTime'];
        }
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }
        if (isset($map['resultStatusList'])) {
            $model->resultStatusList = $map['resultStatusList'];
        }

        return $model;
    }
}
