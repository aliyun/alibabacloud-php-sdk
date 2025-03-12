<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\SubmitCheckResponseBody\data;
use AlibabaCloud\Tea\Model;

class SubmitCheckResponseBody extends Model
{
    /**
     * @description The data returned if the call is successful.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example CE8369A6-A843-5E1B-A613-78E6920D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the configuration assessment task.
     *
     * @example 5fe3f65d-4012-455d-8232-2a98a858****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitCheckResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
