<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class UpdateQuotaScheduleResponseBody extends Model
{
    /**
     * @description The returned result.
     *
     * @example success
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example 0a06dfe516691014920015940e1c9d
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'data',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateQuotaScheduleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
