<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListConnectionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $connectionIds;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string[]
     */
    public $connectionTypes;

    /**
     * @var string
     */
    public $encryptOption;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string[]
     */
    public $modelTypes;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var bool
     */
    public $toolCall;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'connectionIds' => 'ConnectionIds',
        'connectionName' => 'ConnectionName',
        'connectionTypes' => 'ConnectionTypes',
        'encryptOption' => 'EncryptOption',
        'maxResults' => 'MaxResults',
        'model' => 'Model',
        'modelTypes' => 'ModelTypes',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'sortBy' => 'SortBy',
        'toolCall' => 'ToolCall',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->connectionIds)) {
            Model::validateArray($this->connectionIds);
        }
        if (\is_array($this->connectionTypes)) {
            Model::validateArray($this->connectionTypes);
        }
        if (\is_array($this->modelTypes)) {
            Model::validateArray($this->modelTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionIds) {
            if (\is_array($this->connectionIds)) {
                $res['ConnectionIds'] = [];
                $n1 = 0;
                foreach ($this->connectionIds as $item1) {
                    $res['ConnectionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        if (null !== $this->connectionTypes) {
            if (\is_array($this->connectionTypes)) {
                $res['ConnectionTypes'] = [];
                $n1 = 0;
                foreach ($this->connectionTypes as $item1) {
                    $res['ConnectionTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->encryptOption) {
            $res['EncryptOption'] = $this->encryptOption;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->modelTypes) {
            if (\is_array($this->modelTypes)) {
                $res['ModelTypes'] = [];
                $n1 = 0;
                foreach ($this->modelTypes as $item1) {
                    $res['ModelTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->toolCall) {
            $res['ToolCall'] = $this->toolCall;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['ConnectionIds'])) {
            if (!empty($map['ConnectionIds'])) {
                $model->connectionIds = [];
                $n1 = 0;
                foreach ($map['ConnectionIds'] as $item1) {
                    $model->connectionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        if (isset($map['ConnectionTypes'])) {
            if (!empty($map['ConnectionTypes'])) {
                $model->connectionTypes = [];
                $n1 = 0;
                foreach ($map['ConnectionTypes'] as $item1) {
                    $model->connectionTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EncryptOption'])) {
            $model->encryptOption = $map['EncryptOption'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ModelTypes'])) {
            if (!empty($map['ModelTypes'])) {
                $model->modelTypes = [];
                $n1 = 0;
                foreach ($map['ModelTypes'] as $item1) {
                    $model->modelTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['ToolCall'])) {
            $model->toolCall = $map['ToolCall'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
