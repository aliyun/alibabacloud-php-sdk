<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryImportedDeviceByApplyIdResponseBody\deviceList;
use AlibabaCloud\Tea\Model;

class QueryImportedDeviceByApplyIdResponseBody extends Model
{
    /**
     * @description The error code returned if the request fails. For more information, see [Error codes](~~87387~~).
     *
     * @example iot.system.SystemException
     *
     * @var string
     */
    public $code;

    /**
     * @description The queried devices.
     *
     * @var deviceList
     */
    public $deviceList;

    /**
     * @description The error message returned if the request fails.
     *
     * @example A system exception occurred.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the devices belong.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The request ID.
     *
     * @example E4C0FF92-2A86-41DB-92D3-73B60310D25E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of pages returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'code'         => 'Code',
        'deviceList'   => 'DeviceList',
        'errorMessage' => 'ErrorMessage',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'productKey'   => 'ProductKey',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'totalPage'    => 'TotalPage',
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
        if (null !== $this->deviceList) {
            $res['DeviceList'] = null !== $this->deviceList ? $this->deviceList->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryImportedDeviceByApplyIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DeviceList'])) {
            $model->deviceList = deviceList::fromMap($map['DeviceList']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
