<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data\response;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2025-05-13 12:12:12
     *
     * @var string
     */
    public $auditTime;

    /**
     * @example 审核时的原文
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $htmlContent;

    /**
     * @var response
     */
    public $response;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'auditTime' => 'AuditTime',
        'content' => 'Content',
        'htmlContent' => 'HtmlContent',
        'response' => 'Response',
        'status' => 'Status',
        'taskStatus' => 'TaskStatus',
        'title' => 'Title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->htmlContent) {
            $res['HtmlContent'] = $this->htmlContent;
        }
        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['HtmlContent'])) {
            $model->htmlContent = $map['HtmlContent'];
        }
        if (isset($map['Response'])) {
            $model->response = response::fromMap($map['Response']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
