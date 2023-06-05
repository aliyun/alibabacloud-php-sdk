<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetProjectResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetProjectResponseBody extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @var data
     */
    public $data;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The description of the workspace.
     *
     * @example 0bc1411515937635973****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the workspace. Valid values:
     *
     *   AVAILABLE(0): The workspace is in a normal state.
     *   DELETED(1): The workspace is deleted.
     *   INITIALIZING(2): The workspace is being initialized.
     *   INIT_FAILED(3): The workspace fails to be initialized.
     *   FORBIDDEN(4): The workspace is manually disabled.
     *   DELETING(5): The workspace is being deleted.
     *   DEL_FAILED(6): The workspace fails to be deleted.
     *   FROZEN(7): The workspace is frozen due to overdue payments.
     *   UPDATING(8): The workspace is being updated. The workspace enters this state after you associate a new compute engine with the workspace and the compute engine is being initialized.
     *   UPDATE_FAILED(9): The workspace fails to be updated.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'           => 'Data',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
     * @return GetProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
