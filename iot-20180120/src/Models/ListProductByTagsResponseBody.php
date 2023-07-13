<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductByTagsResponseBody\productInfos;
use AlibabaCloud\Tea\Model;

class ListProductByTagsResponseBody extends Model
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
     * @description The details of the products returned if the call is successful. The details are included in the **ProductInfo** parameter.
     *
     * >  The returned product information is sorted in reverse-chronological order based on the time when the products were created.
     * @var productInfos
     */
    public $productInfos;

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
     *   **true**: The call was successful.
     *   **false**: The call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'errorMessage' => 'ErrorMessage',
        'productInfos' => 'ProductInfos',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->productInfos) {
            $res['ProductInfos'] = null !== $this->productInfos ? $this->productInfos->toMap() : null;
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
     * @return ListProductByTagsResponseBody
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
        if (isset($map['ProductInfos'])) {
            $model->productInfos = productInfos::fromMap($map['ProductInfos']);
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
