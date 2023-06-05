<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DeleteDISyncTaskResponseBody\data;
use AlibabaCloud\Tea\Model;

class DeleteDISyncTaskResponseBody extends Model
{
    /**
     * @description Indicates whether the synchronization node in Data Integration is deleted. Valid values:
     *
     *   success: The synchronization node in Data Integration is deleted.
     *   fail: The synchronization node in Data Integration failed to be deleted. You can troubleshoot the issue based on the failure reason.
     *
     * @var data
     */
    public $data;

    /**
     * @description The result returned after you called the DeleteDISyncTask operation.
     *
     * @example 0bc1411515937635973****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the request. You can use the ID to locate logs and troubleshoot issues.
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
     * @return DeleteDISyncTaskResponseBody
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
