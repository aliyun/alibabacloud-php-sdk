<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\UpdateMemoryResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $memoryId;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'memory' => 'memory',
        'memoryId' => 'memory_id',
        'message' => 'message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }

        if (null !== $this->memoryId) {
            $res['memory_id'] = $this->memoryId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }

        if (isset($map['memory_id'])) {
            $model->memoryId = $map['memory_id'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
