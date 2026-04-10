<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class SearchMemoriesRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $createTimeBegin;

    /**
     * @var string
     */
    public $createTimeEnd;

    /**
     * @var string
     */
    public $memoryAgentId;

    /**
     * @var string
     */
    public $memoryUserId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $topK;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'createTimeBegin' => 'CreateTimeBegin',
        'createTimeEnd' => 'CreateTimeEnd',
        'memoryAgentId' => 'MemoryAgentId',
        'memoryUserId' => 'MemoryUserId',
        'query' => 'Query',
        'topK' => 'TopK',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->createTimeBegin) {
            $res['CreateTimeBegin'] = $this->createTimeBegin;
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->memoryAgentId) {
            $res['MemoryAgentId'] = $this->memoryAgentId;
        }

        if (null !== $this->memoryUserId) {
            $res['MemoryUserId'] = $this->memoryUserId;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->topK) {
            $res['TopK'] = $this->topK;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['CreateTimeBegin'])) {
            $model->createTimeBegin = $map['CreateTimeBegin'];
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['MemoryAgentId'])) {
            $model->memoryAgentId = $map['MemoryAgentId'];
        }

        if (isset($map['MemoryUserId'])) {
            $model->memoryUserId = $map['MemoryUserId'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['TopK'])) {
            $model->topK = $map['TopK'];
        }

        return $model;
    }
}
