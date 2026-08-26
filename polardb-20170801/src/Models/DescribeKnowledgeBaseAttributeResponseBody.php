<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeKnowledgeBaseAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $bindingAppCount;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $knowledgeBaseId;

    /**
     * @var string
     */
    public $knowledgeBaseType;

    /**
     * @var string
     */
    public $knowledgeSpaceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $searchMode;

    /**
     * @var int
     */
    public $shardCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalDocs;

    /**
     * @var int
     */
    public $totalSizeBytes;
    protected $_name = [
        'bindingAppCount' => 'BindingAppCount',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'knowledgeBaseId' => 'KnowledgeBaseId',
        'knowledgeBaseType' => 'KnowledgeBaseType',
        'knowledgeSpaceId' => 'KnowledgeSpaceId',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'searchMode' => 'SearchMode',
        'shardCount' => 'ShardCount',
        'status' => 'Status',
        'totalDocs' => 'TotalDocs',
        'totalSizeBytes' => 'TotalSizeBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingAppCount) {
            $res['BindingAppCount'] = $this->bindingAppCount;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->knowledgeBaseId) {
            $res['KnowledgeBaseId'] = $this->knowledgeBaseId;
        }

        if (null !== $this->knowledgeBaseType) {
            $res['KnowledgeBaseType'] = $this->knowledgeBaseType;
        }

        if (null !== $this->knowledgeSpaceId) {
            $res['KnowledgeSpaceId'] = $this->knowledgeSpaceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }

        if (null !== $this->shardCount) {
            $res['ShardCount'] = $this->shardCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalDocs) {
            $res['TotalDocs'] = $this->totalDocs;
        }

        if (null !== $this->totalSizeBytes) {
            $res['TotalSizeBytes'] = $this->totalSizeBytes;
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
        if (isset($map['BindingAppCount'])) {
            $model->bindingAppCount = $map['BindingAppCount'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['KnowledgeBaseId'])) {
            $model->knowledgeBaseId = $map['KnowledgeBaseId'];
        }

        if (isset($map['KnowledgeBaseType'])) {
            $model->knowledgeBaseType = $map['KnowledgeBaseType'];
        }

        if (isset($map['KnowledgeSpaceId'])) {
            $model->knowledgeSpaceId = $map['KnowledgeSpaceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }

        if (isset($map['ShardCount'])) {
            $model->shardCount = $map['ShardCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalDocs'])) {
            $model->totalDocs = $map['TotalDocs'];
        }

        if (isset($map['TotalSizeBytes'])) {
            $model->totalSizeBytes = $map['TotalSizeBytes'];
        }

        return $model;
    }
}
