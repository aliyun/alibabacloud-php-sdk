<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListAgentStoragesRequest\tag;

class ListAgentStoragesRequest extends Model
{
    /**
     * @var string
     */
    public $agentStorageName;

    /**
     * @var string[]
     */
    public $agentStorageNameList;

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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'agentStorageName' => 'AgentStorageName',
        'agentStorageNameList' => 'AgentStorageNameList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->agentStorageNameList)) {
            Model::validateArray($this->agentStorageNameList);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStorageName) {
            $res['AgentStorageName'] = $this->agentStorageName;
        }

        if (null !== $this->agentStorageNameList) {
            if (\is_array($this->agentStorageNameList)) {
                $res['AgentStorageNameList'] = [];
                $n1 = 0;
                foreach ($this->agentStorageNameList as $item1) {
                    $res['AgentStorageNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AgentStorageName'])) {
            $model->agentStorageName = $map['AgentStorageName'];
        }

        if (isset($map['AgentStorageNameList'])) {
            if (!empty($map['AgentStorageNameList'])) {
                $model->agentStorageNameList = [];
                $n1 = 0;
                foreach ($map['AgentStorageNameList'] as $item1) {
                    $model->agentStorageNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
