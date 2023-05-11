<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertiesDataResponseBody\propertyDataInfos;
use AlibabaCloud\Tea\Model;

class QueryDevicePropertiesDataResponseBody extends Model
{
    /**
     * @description The error code returned if the call fails. For more information, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned if the call fails.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The start time to query on the next page.
     *
     * You can use the value of the **NextTime** parameter as the value of the **StartTime** parameter when you query the next page of results.
     * @example 1579249499000
     *
     * @var int
     */
    public $nextTime;

    /**
     * @description Indicates whether the next page exists.
     *
     *   **true**: The next page exists.
     *   **false**: The next page does not exist.
     *
     * If the return value of the **NextValid** parameter is **true**, you can use the value of the **NextTime** parameter as the value of the **StartTime** parameter when you query the next page of results.
     * @example true
     *
     * @var bool
     */
    public $nextValid;

    /**
     * @description The list of property records returned if the call is successful. For more information, see **PropertyDataInfo**.
     *
     * @var propertyDataInfos
     */
    public $propertyDataInfos;

    /**
     * @description The ID of the request.
     *
     * @example E55E50B7-40EE-4B6B-8BBE-D3ED55CCF565
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful.
     *
     * - **true**: The call was successful.
     * - **false**: The call failed.
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'errorMessage'      => 'ErrorMessage',
        'nextTime'          => 'NextTime',
        'nextValid'         => 'NextValid',
        'propertyDataInfos' => 'PropertyDataInfos',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->nextTime) {
            $res['NextTime'] = $this->nextTime;
        }
        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
        }
        if (null !== $this->propertyDataInfos) {
            $res['PropertyDataInfos'] = null !== $this->propertyDataInfos ? $this->propertyDataInfos->toMap() : null;
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
     * @return QueryDevicePropertiesDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NextTime'])) {
            $model->nextTime = $map['NextTime'];
        }
        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }
        if (isset($map['PropertyDataInfos'])) {
            $model->propertyDataInfos = propertyDataInfos::fromMap($map['PropertyDataInfos']);
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
