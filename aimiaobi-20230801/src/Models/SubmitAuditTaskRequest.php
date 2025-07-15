<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SubmitAuditTaskRequest extends Model
{
    /**
     * @example xxxx
     *
     * @var string
     */
    public $articleId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $htmlContent;

    /**
     * @var string
     */
    public $title;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'articleId' => 'ArticleId',
        'content' => 'Content',
        'htmlContent' => 'HtmlContent',
        'title' => 'Title',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articleId) {
            $res['ArticleId'] = $this->articleId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->htmlContent) {
            $res['HtmlContent'] = $this->htmlContent;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAuditTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArticleId'])) {
            $model->articleId = $map['ArticleId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['HtmlContent'])) {
            $model->htmlContent = $map['HtmlContent'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
