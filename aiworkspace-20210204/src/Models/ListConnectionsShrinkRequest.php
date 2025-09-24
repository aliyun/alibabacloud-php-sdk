<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListConnectionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $connectionIdsShrink;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $connectionTypesShrink;

    /**
     * @var string
     */
    public $creator;

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
     * @var string
     */
    public $modelTypesShrink;

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
        'connectionIdsShrink' => 'ConnectionIds',
        'connectionName' => 'ConnectionName',
        'connectionTypesShrink' => 'ConnectionTypes',
        'creator' => 'Creator',
        'encryptOption' => 'EncryptOption',
        'maxResults' => 'MaxResults',
        'model' => 'Model',
        'modelTypesShrink' => 'ModelTypes',
        'nextToken' => 'NextToken',
        'order' => 'Order',
        'sortBy' => 'SortBy',
        'toolCall' => 'ToolCall',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionIdsShrink) {
            $res['ConnectionIds'] = $this->connectionIdsShrink;
        }

        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        if (null !== $this->connectionTypesShrink) {
            $res['ConnectionTypes'] = $this->connectionTypesShrink;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
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

        if (null !== $this->modelTypesShrink) {
            $res['ModelTypes'] = $this->modelTypesShrink;
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
            $model->connectionIdsShrink = $map['ConnectionIds'];
        }

        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        if (isset($map['ConnectionTypes'])) {
            $model->connectionTypesShrink = $map['ConnectionTypes'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
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
            $model->modelTypesShrink = $map['ModelTypes'];
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
