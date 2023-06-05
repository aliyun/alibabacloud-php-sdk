<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\QueryDISyncTaskConfigProcessResultResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryDISyncTaskConfigProcessResultResponseBody extends Model
{
    /**
     * @description Indicates whether the parameters are obtained. Valid values:
     *
     *   success: indicates that the parameters are obtained.
     *   fail: indicates that the parameters fail to be obtained. You can view the reason for the failure and troubleshoot the issue based on the reason.
     *
     * @var data
     */
    public $data;

    /**
     * @description The information returned for the parameters that are asynchronously generated and used to create or update a real-time synchronization node or a synchronization solution in Data Integration.
     *
     * @example 0bc1411515937635973****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request. You can locate logs and troubleshoot issues based on the ID.
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
     * @return QueryDISyncTaskConfigProcessResultResponseBody
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
