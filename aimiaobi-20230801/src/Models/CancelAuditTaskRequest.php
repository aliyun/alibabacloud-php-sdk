<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class CancelAuditTaskRequest extends Model
{
    /**
     * @var string
     */
    public $articleId;

    /**
     * @var string
     */
    public $contentAuditTaskId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'articleId' => 'ArticleId',
        'contentAuditTaskId' => 'ContentAuditTaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
