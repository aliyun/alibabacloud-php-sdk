<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class CreateIndividuationTextTaskResponseBody extends Model
{
    /**
     * @example 56AC346B-AF40-5E4F-AFFE-FD8BA5E6FB3A
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
     * @return CreateIndividuationTextTaskResponseBody
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
