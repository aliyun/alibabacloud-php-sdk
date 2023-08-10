<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CountJobByConditionResponseBody extends Model
{
    /**
     * @description The internal error code. This parameter will be removed soon.
     *
     * @example 403
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the  **%s** variable in the **ErrMessage** parameter.
     *
     * > If the return value of the **ErrMessage** parameter is **The Value of Input Parameter %s is not valid** and the return value of the **DynamicMessage** parameter is **DtsJobId**, the specified **DtsJobId** parameter is invalid.
     * @example present environment is not support,so skip.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The error code returned if the request failed.
     *
     * @example InternalError
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The request processing has failed due to some unknown error.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The ID of the request.
     *
     * @example FC3BAAF2-74E3-4471-8EB5-96202D6A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of data synchronization instances that meet the requirements and belong to your Alibaba Cloud account.
     *
     * @example 100
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'dynamicCode'      => 'DynamicCode',
        'dynamicMessage'   => 'DynamicMessage',
        'errCode'          => 'ErrCode',
        'errMessage'       => 'ErrMessage',
        'httpStatusCode'   => 'HttpStatusCode',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }
        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
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
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountJobByConditionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }
        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
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
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
