<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\QueryAuditTaskResponseBody\data\response;

class data extends Model
{
    /**
     * @var string
     */
    public $auditTime;

    /**
     * @var string
     */
    public $content;

    /**
     * @var response
     */
    public $response;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskStatus;
    protected $_name = [
        'auditTime' => 'AuditTime',
        'content' => 'Content',
        'response' => 'Response',
        'status' => 'Status',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditTime) {
            $res['AuditTime'] = $this->auditTime;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['AuditTime'])) {
            $model->auditTime = $map['AuditTime'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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

        return $model;
    }
}
