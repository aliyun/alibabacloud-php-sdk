<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextResponseBody;

use AlibabaCloud\Tea\Model;

class textList extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 2849286
     *
     * @var string
     */
    public $itemId;

    /**
     * @example 812884915104530432
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;

    /**
     * @example 837074737851613184
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 110825
     *
     * @var string
     */
    public $textId;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 11
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'content'    => 'content',
        'createTime' => 'createTime',
        'errorMsg'   => 'errorMsg',
        'itemId'     => 'itemId',
        'projectId'  => 'projectId',
        'status'     => 'status',
        'taskId'     => 'taskId',
        'textId'     => 'textId',
        'updateTime' => 'updateTime',
        'userId'     => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->textId) {
            $res['textId'] = $this->textId;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['textId'])) {
            $model->textId = $map['textId'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
