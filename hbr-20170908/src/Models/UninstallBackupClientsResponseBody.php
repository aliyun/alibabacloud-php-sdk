<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\UninstallBackupClientsResponseBody\instanceStatuses;

class UninstallBackupClientsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var instanceStatuses[]
     */
    public $instanceStatuses;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'code'             => 'Code',
        'instanceStatuses' => 'InstanceStatuses',
        'message'          => 'Message',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'taskId'           => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceStatuses)) {
            Model::validateArray($this->instanceStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->instanceStatuses) {
            if (\is_array($this->instanceStatuses)) {
                $res['InstanceStatuses'] = [];
                $n1                      = 0;
                foreach ($this->instanceStatuses as $item1) {
                    $res['InstanceStatuses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['InstanceStatuses'])) {
            if (!empty($map['InstanceStatuses'])) {
                $model->instanceStatuses = [];
                $n1                      = 0;
                foreach ($map['InstanceStatuses'] as $item1) {
                    $model->instanceStatuses[$n1++] = instanceStatuses::fromMap($item1);
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
