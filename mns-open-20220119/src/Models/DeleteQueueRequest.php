<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mnsopen\V20220119\Models;

use AlibabaCloud\Tea\Model;

class DeleteQueueRequest extends Model
{
    /**
     * @description The name of the queue.
     *
     * This parameter is required.
     * @example tf-testAccMNSQueue-525478433321945943
     *
     * @var string
     */
    public $queueName;
    protected $_name = [
        'queueName' => 'QueueName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }

        return $model;
    }
}
