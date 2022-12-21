<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListLogicTableRouteConfigResponseBody\logicTableRouteConfigList;
use AlibabaCloud\Tea\Model;

class ListLogicTableRouteConfigResponseBody extends Model
{
    /**
     * @description The error code returned.
     *
     * @example MissingTableId
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned.
     *
     * @example TableId is mandatory for this action.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The routing algorithms.
     *
     * @var logicTableRouteConfigList
     */
    public $logicTableRouteConfigList;

    /**
     * @description The ID of the request.
     *
     * @example 7C6A0D7D-B034-59F6-854C-32425AC6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     * - **true**: The request was successful.
     * - **false**: The request failed.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'                 => 'ErrorCode',
        'errorMessage'              => 'ErrorMessage',
        'logicTableRouteConfigList' => 'LogicTableRouteConfigList',
        'requestId'                 => 'RequestId',
        'success'                   => 'Success',
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
        if (null !== $this->logicTableRouteConfigList) {
            $res['LogicTableRouteConfigList'] = null !== $this->logicTableRouteConfigList ? $this->logicTableRouteConfigList->toMap() : null;
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
     * @return ListLogicTableRouteConfigResponseBody
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
        if (isset($map['LogicTableRouteConfigList'])) {
            $model->logicTableRouteConfigList = logicTableRouteConfigList::fromMap($map['LogicTableRouteConfigList']);
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
