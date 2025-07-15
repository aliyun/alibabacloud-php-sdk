<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class CancelAuditTaskRequest extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $articleId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $contentAuditTaskId;

    /**
     * @example llm-xxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'articleId' => 'ArticleId',
        'contentAuditTaskId' => 'ContentAuditTaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articleId) {
            $res['ArticleId'] = $this->articleId;
        }
        if (null !== $this->contentAuditTaskId) {
            $res['ContentAuditTaskId'] = $this->contentAuditTaskId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelAuditTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArticleId'])) {
            $model->articleId = $map['ArticleId'];
        }
        if (isset($map['ContentAuditTaskId'])) {
            $model->contentAuditTaskId = $map['ContentAuditTaskId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
