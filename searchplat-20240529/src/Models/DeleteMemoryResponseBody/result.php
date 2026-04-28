<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\DeleteMemoryResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $memoryId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'memoryId' => 'memory_id',
        'message' => 'message',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memoryId) {
            $res['memory_id'] = $this->memoryId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['memory_id'])) {
            $model->memoryId = $map['memory_id'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
