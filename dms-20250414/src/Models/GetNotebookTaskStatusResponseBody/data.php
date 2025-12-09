<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetNotebookTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $notebookSchedulePreviewUrl;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'notebookSchedulePreviewUrl' => 'NotebookSchedulePreviewUrl',
        'progress' => 'Progress',
        'result' => 'Result',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->notebookSchedulePreviewUrl) {
            $res['NotebookSchedulePreviewUrl'] = $this->notebookSchedulePreviewUrl;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['NotebookSchedulePreviewUrl'])) {
            $model->notebookSchedulePreviewUrl = $map['NotebookSchedulePreviewUrl'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
