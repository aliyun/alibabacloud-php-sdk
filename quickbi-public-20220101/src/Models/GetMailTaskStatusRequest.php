<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class GetMailTaskStatusRequest extends Model
{
    /**
     * @description Mail ID
     *
     * This parameter is required.
     *
     * @example d5a5****8b634d****5584f8dc159c62
     *
     * @var string
     */
    public $mailId;

    /**
     * @description Task ID
     *
     * > - If the task ID is not provided, the latest task status will be returned by default;
     * > - If the task ID is provided, the status of the specified task will be returned.
     *
     * @example 7218****0392****212
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'mailId' => 'MailId',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mailId) {
            $res['MailId'] = $this->mailId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMailTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MailId'])) {
            $model->mailId = $map['MailId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
