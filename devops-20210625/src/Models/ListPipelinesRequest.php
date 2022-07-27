<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListPipelinesRequest extends Model
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
     * @var string
     */
    public $creatorAccountIds;

    /**
     * @var string
     */
    public $executeAccountIds;

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
    public $statusList;
    protected $_name = [
        'createEndTime'     => 'createEndTime',
        'createStartTime'   => 'createStartTime',
        'creatorAccountIds' => 'creatorAccountIds',
        'executeAccountIds' => 'executeAccountIds',
        'executeEndTime'    => 'executeEndTime',
        'executeStartTime'  => 'executeStartTime',
        'maxResults'        => 'maxResults',
        'nextToken'         => 'nextToken',
        'pipelineName'      => 'pipelineName',
        'statusList'        => 'statusList',
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
        if (null !== $this->creatorAccountIds) {
            $res['creatorAccountIds'] = $this->creatorAccountIds;
        }
        if (null !== $this->executeAccountIds) {
            $res['executeAccountIds'] = $this->executeAccountIds;
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
        if (null !== $this->statusList) {
            $res['statusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelinesRequest
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
        if (isset($map['creatorAccountIds'])) {
            $model->creatorAccountIds = $map['creatorAccountIds'];
        }
        if (isset($map['executeAccountIds'])) {
            $model->executeAccountIds = $map['executeAccountIds'];
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
        if (isset($map['statusList'])) {
            $model->statusList = $map['statusList'];
        }

        return $model;
    }
}
