<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\metadata;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\taskStatusUpdate\status;

class taskStatusUpdate extends Model
{
    /**
     * @var string
     */
    public $contextId;

    /**
     * @var bool
     */
    public $final;

    /**
     * @var metadata
     */
    public $metadata;

    /**
     * @var status
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'contextId' => 'ContextId',
        'final' => 'Final',
        'metadata' => 'Metadata',
        'status' => 'Status',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextId) {
            $res['ContextId'] = $this->contextId;
        }

        if (null !== $this->final) {
            $res['Final'] = $this->final;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ContextId'])) {
            $model->contextId = $map['ContextId'];
        }

        if (isset($map['Final'])) {
            $model->final = $map['Final'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = metadata::fromMap($map['Metadata']);
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
