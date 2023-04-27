<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLResponseBody\downloadURLResult;
use AlibabaCloud\Tea\Model;

class GetDataExportDownloadURLResponseBody extends Model
{
    /**
     * @description The ID of the ticket. You can call the [ListOrders](~~144643~~) operation to obtain the ticket ID.
     *
     * @var downloadURLResult
     */
    public $downloadURLResult;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The operation that you want to perform. Set the value to **GetDataExportDownloadURL**.
     *
     * @example 4BF24EA5-9013-4C85-AE68-6C23AF5E0097
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'downloadURLResult' => 'DownloadURLResult',
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'requestId'         => 'RequestId',
        'success'           => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadURLResult) {
            $res['DownloadURLResult'] = null !== $this->downloadURLResult ? $this->downloadURLResult->toMap() : null;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return GetDataExportDownloadURLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadURLResult'])) {
            $model->downloadURLResult = downloadURLResult::fromMap($map['DownloadURLResult']);
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
