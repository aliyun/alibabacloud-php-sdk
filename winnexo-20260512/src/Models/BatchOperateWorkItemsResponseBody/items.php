<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\BatchOperateWorkItemsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $workItemId;
    protected $_name = [
        'reason' => 'reason',
        'success' => 'success',
        'workItemId' => 'workItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->workItemId) {
            $res['workItemId'] = $this->workItemId;
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
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['workItemId'])) {
            $model->workItemId = $map['workItemId'];
        }

        return $model;
    }
}
