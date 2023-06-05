<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListInstancesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListInstancesResponseBody extends Model
{
    /**
     * @description The ID of the node. You can call the [ListNodes](~~173979~~) operation to query the ID of the node.
     *
     * @var data
     */
    public $data;

    /**
     * @description The HTTP status code returned.
     *
     * @example Invalid.Tenant.ProjectNotExists
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The page number of the returned page.
     *
     * @example The project does not exist.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The error message that is returned for the instance.
     *
     * This parameter is deprecated. You can call the [GetInstanceLog](~~173983~~) operation to query the error information related to the node.
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The name of the node.
     *
     * @example E6F0DBDD-5AD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'data'           => 'Data',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return ListInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
