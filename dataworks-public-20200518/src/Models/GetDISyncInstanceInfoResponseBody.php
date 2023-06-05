<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetDISyncInstanceInfoResponseBody extends Model
{
    /**
     * @description *   If the TaskType parameter is set to DI_REALTIME, the Status parameter indicates the status of the real-time synchronization node. Valid values: PAUSE, NORUN, RUN, KILLING, and WAIT.
     *   If the TaskType parameter is set to DI_SOLITION, the Status parameter indicates the status of the data synchronization solution. Valid values: success and fail.
     *
     * @var data
     */
    public $data;

    /**
     * @description The status of the real-time synchronization node or data synchronization solution.
     *
     * @example 0bc1411515937635973****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDISyncInstanceInfoResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
