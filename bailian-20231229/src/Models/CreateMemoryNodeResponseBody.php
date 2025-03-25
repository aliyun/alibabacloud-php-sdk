<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class CreateMemoryNodeResponseBody extends Model
{
    /**
     * @example 68de06c95368463a8be4a84efc872cc5
     *
     * @var string
     */
    public $memoryNodeId;

    /**
     * @example 8C56C7AF-6573-19CE-B018-E05E1EDCF4C5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'memoryNodeId' => 'memoryNodeId',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateMemoryNodeResponseBody
     */
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
