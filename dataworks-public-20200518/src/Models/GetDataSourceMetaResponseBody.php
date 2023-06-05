<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataSourceMetaResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetDataSourceMetaResponseBody extends Model
{
    /**
     * @description Indicates whether the metadata of the data source was retrieved. Valid values:
     *
     *   success: The metadata of the data source was retrieved.
     *   fail: The metadata of the data source failed to be retrieved. You can troubleshoot issues based on the Message parameter.
     *
     * @var data
     */
    public $data;

    /**
     * @description The information about the query operation.
     *
     * @example 0000-ABCD-EFG
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The unique ID of the request. You can query logs and troubleshoot issues based on the unique ID.
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
     * @return GetDataSourceMetaResponseBody
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
