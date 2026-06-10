<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\UsageQueryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $outputTokens;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $totalTokens;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'taskId' => 'taskId',
        'totalTokens' => 'totalTokens',
        'updateTime' => 'updateTime',
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

        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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

        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
