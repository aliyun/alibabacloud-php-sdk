<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetLhSpaceByNameResponseBody\lakehouseSpace;
use AlibabaCloud\Tea\Model;

class GetLhSpaceByNameResponseBody extends Model
{
    /**
     * @description The configuration of the workspace. Valid values:
     *
     *   **skipManualRunCheck**: No security rule check is required in the trial run phase.
     *   **skipPublishApprove**: No approval is required for publishing and O\&M.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The operation that you want to perform. Set the value to **GetLhSpaceByName**.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the production database.
     *
     * @var lakehouseSpace
     */
    public $lakehouseSpace;

    /**
     * @description The error code returned if the request fails.
     *
     * @example FE8CA4A8-AB2D-55B7-BD30-01A4609F40D8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The error message returned if the request fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'lakehouseSpace' => 'LakehouseSpace',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->lakehouseSpace) {
            $res['LakehouseSpace'] = null !== $this->lakehouseSpace ? $this->lakehouseSpace->toMap() : null;
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
     * @return GetLhSpaceByNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['LakehouseSpace'])) {
            $model->lakehouseSpace = lakehouseSpace::fromMap($map['LakehouseSpace']);
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
