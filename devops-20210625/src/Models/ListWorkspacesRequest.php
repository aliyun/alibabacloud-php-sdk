<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListWorkspacesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string[]
     */
    public $workspaceTemplateList;
    protected $_name = [
        'maxResults'            => 'maxResults',
        'nextToken'             => 'nextToken',
        'statusList'            => 'statusList',
        'workspaceTemplateList' => 'workspaceTemplateList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->statusList) {
            $res['statusList'] = $this->statusList;
        }
        if (null !== $this->workspaceTemplateList) {
            $res['workspaceTemplateList'] = $this->workspaceTemplateList;
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
        if (isset($map['statusList'])) {
            if (!empty($map['statusList'])) {
                $model->statusList = $map['statusList'];
            }
        }
        if (isset($map['workspaceTemplateList'])) {
            if (!empty($map['workspaceTemplateList'])) {
                $model->workspaceTemplateList = $map['workspaceTemplateList'];
            }
        }

        return $model;
    }
}
