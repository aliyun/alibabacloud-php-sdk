<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Dara\Model;

class CreateMemoryNodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $memoryNodeId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'memoryNodeId' => 'memoryNodeId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memoryNodeId) {
            $res['memoryNodeId'] = $this->memoryNodeId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['memoryNodeId'])) {
            $model->memoryNodeId = $map['memoryNodeId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
