<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspacesRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example xxxxxxxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cn-heyuan
     *
     * @var string
     */
    public $region;

    /**
     * @example workspace-test-001
     *
     * @var string
     */
    public $workspaceName;

    /**
     * @example workspace-test-001
     *
     * @var string[]
     */
    public $workspaceNameList;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'region' => 'region',
        'workspaceName' => 'workspaceName',
        'workspaceNameList' => 'workspaceNameList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->workspaceName) {
            $res['workspaceName'] = $this->workspaceName;
        }
        if (null !== $this->workspaceNameList) {
            $res['workspaceNameList'] = $this->workspaceNameList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkspacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['workspaceName'])) {
            $model->workspaceName = $map['workspaceName'];
        }
        if (isset($map['workspaceNameList'])) {
            if (!empty($map['workspaceNameList'])) {
                $model->workspaceNameList = $map['workspaceNameList'];
            }
        }

        return $model;
    }
}
