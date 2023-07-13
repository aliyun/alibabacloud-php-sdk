<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateProductResponseBody\data;
use AlibabaCloud\Tea\Model;

class CreateProductResponseBody extends Model
{
    /**
     * @description The error code returned if the call fails. For more information, see [Error codes](~~87387~~).
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The product information returned if the call is successful.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error message returned if the call fails.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ProductKey of the product. A ProductKey is a GUID that is issued by IoT Platform to a product.
     *
     * @example a1FlqIQ****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the request.
     *
     * @example E55E50B7-40EE-4B6B-8BBE-D3ED55CCF565
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values:
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
        'data'         => 'Data',
        'errorMessage' => 'ErrorMessage',
        'productKey'   => 'ProductKey',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
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
     * @return CreateProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
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
