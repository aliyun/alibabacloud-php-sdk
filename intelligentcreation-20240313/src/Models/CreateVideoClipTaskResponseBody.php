<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoClipTaskResponseBody extends Model
{
    /**
     * @example 86A90C40-D1AB-50DA-A4B1-0D545F80F2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 837091359375048704
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'requestId' => 'requestId',
        'taskId'    => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoClipTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
