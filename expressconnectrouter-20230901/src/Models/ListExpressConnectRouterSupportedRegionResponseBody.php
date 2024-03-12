<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Tea\Model;

class ListExpressConnectRouterSupportedRegionResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example 6FABF516-FED3-5697-BDA2-B18C5D9A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @var string[]
     */
    public $supportedRegionIdList;
    protected $_name = [
        'code'                  => 'Code',
        'httpStatusCode'        => 'HttpStatusCode',
        'message'               => 'Message',
        'requestId'             => 'RequestId',
        'success'               => 'Success',
        'supportedRegionIdList' => 'SupportedRegionIdList',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->supportedRegionIdList) {
            $res['SupportedRegionIdList'] = $this->supportedRegionIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExpressConnectRouterSupportedRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SupportedRegionIdList'])) {
            if (!empty($map['SupportedRegionIdList'])) {
                $model->supportedRegionIdList = $map['SupportedRegionIdList'];
            }
        }

        return $model;
    }
}
